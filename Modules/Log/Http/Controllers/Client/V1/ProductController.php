<?php

namespace Modules\Market\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Product\Entities\Product;
use Modules\Depot\Entities\PackageSku;

use Validator;
use ThrowException;
use Auth;

// 转售模块
class ProductController extends Controller
{
    // 批量转售
    public function index(Request $req)
    {
        $rule = [
            'package_sku_ids' => ['required', 'array']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $user = Auth::requireLoginUser();

        $options = $req->all();

        $options['per_page'] = 10;
        $options['scopes'] = ['onStock'];

        $options['with'] = ['image_tag'];

        $options['only'] = [
            'id',
            'uuid',
            'title',
            'money_price',
            'score_price',
            'discount_money_price',
            'discount_score_price',
            'pay_money_price',
            'pay_score_price',
            'tags',
            'thumb',
            'type',
            'stock',
            'is_presell',
            'image_tag' => [
                // 'title',
                'image',
                'location'
            ],
        ];

        $list = Product::getList($options);

        // 准备要兑换的仓库物品
        $packageSkus = PackageSku::status('pending')->where('user_id', $user->id)->whereIn('id', $req->input('package_sku_ids'))->get();
        // 计算这些物品可抵扣的人民币及积分数额
        list($money, $score) = PackageSku::calcExchangeInfoForList($packageSkus);

        // 计算需要补的差价
        $list->each(function ($item) use ($money, $score) {
            $item->pay_money_price = subtractOrZero($item->money_price, $money);
            $item->pay_score_price = subtractOrZero($item->score_price, $score); 
        });

        return $list->generateListResponse();
        
    }
}
