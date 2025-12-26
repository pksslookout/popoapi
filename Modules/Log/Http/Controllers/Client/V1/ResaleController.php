<?php

namespace Modules\Market\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Depot\Entities\PackageSku;
use Modules\Depot\Entities\Package;
use Modules\Asset\Entities\Resale;

use Validator;
use ThrowException;
use Auth;
use Setting;
use DB;

// 转售模块
class ResaleController extends Controller
{
    // 批量转售
    public function batchConfirm(Request $req)
    {
        $rule = [
            'ids' => ['array'],
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $user = Auth::requireLoginUser();

        // 1秒内只能调1次此api
        Auth::limitTimeBeforeProcess($user, 'create_resale', 1);

        $ids = $req->input('ids');

        $list = PackageSku::whereIn('id', $ids)->where('user_id', $user->id)->status('pending')->get();

        if ($list->count() !== count($ids)) {
            ThrowException::Conflict('部分物品不可挂售，请刷新后重试~');
        }

        DB::beginTransaction();

        // 批量挂售
        $resale = Resale::createWithPackageSkus($user, $list);

        // 尝试自动购买
        $resale->tryAutoBuy();

        DB::commit();

        return [
        ];
    }
}
