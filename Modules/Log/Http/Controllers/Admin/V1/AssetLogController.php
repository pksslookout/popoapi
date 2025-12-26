<?php
namespace Modules\Log\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Log\Entities\AdminLog;

use Modules\Asset\Entities\ManualSendRecord;

use Validator;
use ThrowException;
use Auth;

class AssetLogController extends Controller
{

    public function actionTypeMapIndex(Request $req)
    {
        $textMap = AdminLog::$actionTypeTextMap;
        $keyMap = AdminLog::$actionTypeMap;

        $map = [];

        foreach ($textMap as $key => $value) {
            $map[array_search($key, $keyMap)] = $value;
        }

        return ['map' => $map];
    }

    public function keyMapIndex(Request $req)
    {
        $map = [
            'fudai_lucky_score' => '福袋欧气',
            'lucky_score' => '总欧气',
            'sales' => '销量',
            'sku_title' => '奖品',
            'stock' => '库存',
            'odds' => '概率',
            'money_price' => '人民币',
            'score_price' => '积分',
            'probability' => '开奖区间'
        ];

        return [
            'map' => $map
        ];
    }

    // 所有页面
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $options = $req->all();

        $options['with'] = ['admin', 'user'];

        // $options['only'] = [
        //     'id',
        //     'describe',
        //     'created_at',
        //     'before',
        //     'after',
        //     'node_title',
        //     'node_type_text',
        //     'admin' => [
        //         'id',
        //         'name',
        //         'phone'
        //     ],
        //     'user' => [
        //         'id',
        //         'uuid',
        //         'name',
        //         'headimg',
        //         'phone'
        //     ]
        // ];

        $list = ManualSendRecord::getList($options);

        return $list->generateListResponse();
    }

    public function show(Request $req, $uuid)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = ManualSendRecord::getPage($uuid);

        $info = $item->getInfo();

        return [
            'info' => $info
        ];
    }
}
