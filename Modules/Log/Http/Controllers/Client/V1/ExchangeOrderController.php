<?php

namespace Modules\Market\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Product\Entities\Sku;
use Modules\Depot\Entities\PackageSku;
use Modules\Order\Entities\ProductOrder as Order;
use Modules\Market\Entities\ExchangeRecord;

use Validator;
use ThrowException;
use Auth;
use Setting;
use DB;

// 转售模块
class ExchangeOrderController extends Controller
{
    // 预览订单
    public function preview(Request $req)
    {
        $rule = [
            'skus' => ['required', 'array'],
            'skus.*.id' => ['required'],
            'skus.*.total' => ['required'],
            'package_sku_ids' => ['required', 'array']
            // 'address_id' => ['integer'],
            // 'coupon_id' => ['integer']
        ];

        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $user = Auth::requireLoginUser();

        $orders = [];
        $address = null;
        $activity = null;
        $groupPrice = null;   // 人群专享价

        // 订单会提示的一些信息，如”秒杀活动无库存，将以原价结算“等
        $tips = NULL;


        // 检查所有sku是否可出售
        $skuables = array_map(function($item) use($user, $activity, $groupPrice) {
            $sku = Sku::getEntity([
                'id' => $item['id']
            ]);

            $sku->checkCanBuy($user, $item['total']);

            if ($activity) {
                $activity->checkCanBuy($sku, $item['total']) || ThrowException::Conflict('活动库存不足~');
            }

            return [
                'skuable' => $sku,
                'activity' => $activity,
                'group_price' => $groupPrice,
                'total' => $item['total']
            ];
        }, $req->skus);

        // 准备收货地址(如果有)
        $address = $user->getAddressOrDefault($req->input('address_id'));

        // 准备优惠券
        $userCoupon = $user->coupons()->valid()->where('id', $req->input('coupon_id'))->first();

        // 计算运费
        list($carriageType, $carriage) = Order::calcCarriage($skuables);

        $isUseRedpack = $req->input('is_use_redpack', 0);
        $isUseScore = $req->input('is_use_score', 0);

        // 准备要兑换的仓库物品
        $packageSkus = PackageSku::status('pending')->where('user_id', $user->id)->whereIn('id', $req->input('package_sku_ids'))->get();
        $exchangeRecord = ExchangeRecord::initWith($user, $packageSkus, $skuables[0]['skuable']);

        // // 创建统一订单
        // $unionOrder = new UnionOrder();
        $order = Order::initWith($skuables, $user, $address, [
            'activity' => $activity,
            'carriage' => $carriage,
            'carriage_type' => $carriageType,
            'coupon' => $userCoupon,
            'cover_type' => $req->input('cover_type'),
            'is_use_redpack' => $req->input('is_use_redpack', 0),
            'is_use_score' => $req->input('is_use_score', 0),
            'exchange_record' => $exchangeRecord
        ]);

        $skus = [];
        foreach ($order->skusTemp as $orderSku) {
            $info = $orderSku->getInfo([
                'sku_id',
                'sku_uuid',
                'thumb',
                'title',
                'attrs',
                'money_price',
                'score_price',
                'discount_money_price',
                'discount_score_price',
                'total',
            ]);
            array_push($skus, $info);
        }

        // 计算可用优惠券
        $coupons = $order->filterCoupons($user->coupons()->with('base_coupon')->valid()->get());

        $orderInfo = [
            'redpack' => $order->calcUsableRedpack($user),
            'max_useable_score' => $order->calcUsableScore($user),
            'is_use_redpack' => $isUseRedpack,
            'is_use_score' => $isUseScore,
            'skus' => $skus,
            'coupons' => $coupons,
            'carriage' => $order->carriage,
            'carriage_type' => $order->carriage_type,
            'coupon_discount' => $order->coupon_discount,
            'cover_discount' => $order->cover_discount,
            'score_discount' => $order->score_discount,
            'cover_type' => $order->cover_type,
            'product_money_price' => $order->product_money_price,
            'product_score_price' => $order->product_score_price,
            'pay_money_price' => $order->pay_money_price,
            'pay_score_price' => $order->pay_score_price,
            'exchange_money_discount' => $order->exchange_money_discount,
            'exchange_score_discount' => $order->exchange_score_discount,
        ];

        $isNeedAddress = $order->is_need_address;

        return [
            'is_need_address' => $isNeedAddress,
            'address' => $isNeedAddress ? $address : NULL,
            'order' => $orderInfo,
            'tips' => $tips
        ];
    }

    // 确认提交订单
    public function confirm(Request $req)
    {

        $rule = [
            'skus' => ['required', 'array'],
            'skus.*.id' => ['required'],
            'skus.*.total' => ['required'],
            'package_sku_ids' => ['required', 'array']
            // 'address_id' => ['integer'],
            // 'coupon_id' => ['integer']
        ];

        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        // 是否开启商城支付
        if (!@Setting::get('sys_pay_enable')['is_shop_enabled']) {
            ThrowException::Conflict(@Setting::get('sys_pay_enable')['shop_tips'] ?: '系统维护中~');
        }

        $user = Auth::requireLoginUser();

        // 1秒内只能调1次此api
        Auth::limitTimeBeforeProcess($user, 'create_exchange', 1);

        $orders = [];
        $address = null;
        $activity = null;
        $groupPrice = null;   // 人群专享价

        // 订单会提示的一些信息，如”秒杀活动无库存，将以原价结算“等
        $tips = NULL;


        // 检查所有sku是否可出售
        $skuables = array_map(function($item) use($user, $activity, $groupPrice) {
            $sku = Sku::getEntity([
                'id' => $item['id']
            ]);

            $sku->checkCanBuy($user, $item['total']);

            if ($activity) {
                $activity->checkCanBuy($sku, $item['total']) || ThrowException::Conflict('活动库存不足~');
            }

            return [
                'skuable' => $sku,
                'activity' => $activity,
                'group_price' => $groupPrice,
                'total' => $item['total']
            ];
        }, $req->skus);

        // 准备收货地址(如果有)
        $address = $user->getAddressOrDefault($req->input('address_id'));

        // 准备优惠券
        $userCoupon = $user->coupons()->valid()->where('id', $req->input('coupon_id'))->first();

        // 计算运费
        list($carriageType, $carriage) = Order::calcCarriage($skuables);

        $isUseRedpack = $req->input('is_use_redpack', 0);
        $isUseScore = $req->input('is_use_score', 0);

        // 准备要兑换的仓库物品
        $packageSkus = PackageSku::status('pending')->where('user_id', $user->id)->whereIn('id', $req->input('package_sku_ids'))->get();
        $exchangeRecord = ExchangeRecord::initWith($user, $packageSkus, $skuables[0]['skuable']);

        // // 创建统一订单
        // $unionOrder = new UnionOrder();
        $order = Order::initWith($skuables, $user, $address, [
            'activity' => $activity,
            'carriage' => $carriage,
            'carriage_type' => $carriageType,
            'coupon' => $userCoupon,
            'cover_type' => $req->input('cover_type'),
            'is_use_redpack' => $req->input('is_use_redpack', 0),
            'is_use_score' => $req->input('is_use_score', 0),
            'exchange_record' => $exchangeRecord
        ]);

        if ($order->isNeedAddress && !$address)
            ThrowException::Conflict('请选择收货地址');

        DB::beginTransaction();
        
        $order->createAll();

        DB::commit();

        // 返回订单信息
        return $order->generateResponse();
    }
}
