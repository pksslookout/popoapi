<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Core\Helpers\HttpClient;

use Validator;
use ThrowException;
use Miniapp;

class WechatController extends Controller
{
    // 获取小程序直播活动列表
    public function miniappLiveList(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $list = [];

        // 有配置
        if (env('MINIAPP_APPID')) {
            $firstMiniappName = array_key_first(config('env.miniapp'));
            $list = @Miniapp::get($firstMiniappName)->live->getRooms()['room_info'] ?: [];
        }
        
        return [
            'list' => $list
        ];
    }

    // 获取小程序码
    public function miniappCode(Request $req)
    {
        $rule = [
            'path' => ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $path = $req->path;

        // 小程序码
        $firstMiniappName = array_key_first(config('env.miniapp'));
        $qrcode = @Miniapp::get($firstMiniappName)->getMiniappCode($path);

        return [
            'info' => $qrcode
        ];
    }

    // 获取小程序码
    // public function getUrl(Request $req)
    // {
    //     $rule = [
    //         'path' => ['required'],
    //         // "query" => ['required']
    //     ];
    //     Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

    //     $path = $req->path;

    //     $token = @Miniapp::get('default')->access_token->getToken()['access_token'];

    //     $url  = 'https://api.weixin.qq.com/wxa/generatescheme?access_token=' . $token;

    //     $http = new HttpClient();

    //     $data = $http->post($url, [
    //         'jump_wxa' => [
    //             "path" => $path,
    //             "query"  => $req->input('query')
    //         ]
    //     ], [
    //         'Content-Type' => 'application/json'
    //     ]);

    //     $data = json_decode($data);

    //     $url = $data->openlink;
        
    //     return [
    //         'url' => $url
    //     ];
    // }
}
