<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Validator;
use ThrowException;
use Platform;

class PlatformController extends Controller
{
    public function appInfo(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $info = Platform::getAppInfo();
        
        return $info;
    }

    public function optionModuleIndex(Request $req)
    {
    	$rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $list = [
        	[
        		'title' => 'App版',
        		'key' => 'app',
        		'description' => '打App安装包，不上架应用市场',
        		'price' => '6K'
         	],
        	[
        		'title' => '支付宝小程序版',
        		'key' => 'ali_miniapp',
        		'description' => '在支付宝中使用的小程序',
        		'price' => '6K'
         	],
        	[
        		'title' => 'H5版',
        		'key' => 'h5',
        		'description' => '手机网页版，可对接支付宝及微信支付',
        		'price' => '6K'
         	],
            [
                'title' => '一番赏',
                'key' => 'yifanshang',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '无限赏',
                'key' => 'infinite_shang',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '福袋',
                'key' => 'fudai',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '选号盲盒',
                'key' => 'grid_box',
                'description' => '-',
                'price' => '2K'
            ],
         	[
        		'title' => '抽盒机',
        		'key' => 'box',
        		'description' => '-',
        		'price' => '2K'
         	],
         	[
        		'title' => '扭蛋机',
        		'key' => 'egg_lottery',
        		'description' => '-',
        		'price' => '2K'
         	],
            [
                'title' => '幸运抽选',
                'key' => 'lottery',
                'description' => '-',
                'price' => '2K'
            ],
         	[
        		'title' => '助力活动',
        		'key' => 'zhuli',
        		'description' => '-',
        		'price' => '2K'
         	],
            [
                'title' => '排行榜',
                'key' => 'ranking',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '碎片合成',
                'key' => 'chip_merge',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '怒气赠送机制',
                'key' => 'anger_reward',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '论坛功能',
                'key' => 'forum',
                'description' => '-',
                'price' => '2K'
            ],
            [
                'title' => '管理后台高级统计',
                'key' => 'stats_pro',
                'description' => '-',
                'price' => '2K'
            ],
         	// [
        		// 'title' => '集卡',
        		// 'key' => 'jika',
        		// 'description' => '-',
        		// 'price' => '2K'
         	// ],
            // [
            //     'title' => '论坛功能',
            //     'key' => 'forum',
            //     'description' => '-',
            //     'price' => '2K'
            // ],
            [
                'title' => '汇付天下第三方支付',
                'key' => 'adapay',
                'description' => '第三方支付对接，费率为0.5% (微信官方支付为0.6%)',
                'price' => '3K'
            ],
        ];

        return [
        	'list' => $list
        ];
    }
}
