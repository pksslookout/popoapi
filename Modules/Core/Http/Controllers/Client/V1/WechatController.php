<?php
namespace Modules\Core\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Core\Helpers\HttpClient;

use Validator;
use ThrowException;
use Miniapp;
use Setting;
use Wechat;

class WechatController extends Controller
{
    //
    public function miniappSubscribeIdIndex(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        // 模板id
        $cacheKey = 'miniapp_subscribe_template_ids_1';
        $ids= @Setting::get($cacheKey) ?: [];

        // return $ids;

        $fresh = false;

        foreach (config('subscribeMessage.miniapp') as $type => $item) {

            $templateId = @$ids[$type];

            if (!$templateId) {
                $info = config('subscribeMessage.miniapp.' . $type);

                $tid = $info['id'];
                $kidList = $info['words'];
                $sceneDesc = $info['desc'];
                $info = Miniapp::get('default')->subscribe_message->addTemplate($tid, $kidList, $sceneDesc);
                $templateId = @$info['priTmplId'];

                if (!$templateId) {
                    \Log::error('订阅消息模板添加失败' . $type);
                    \Log::error($info);

                    return ThrowException::Conflict('订阅消息模板添加失败~');
                }

                $ids[$type] = $templateId;
                $fresh = true;
            }
        }

        if ($fresh) {
            Setting::set($cacheKey, $ids);
        }

        return [
            'ids' => $ids
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

        if ($req->isMethod('post')) {
            // 小程序码
            $qrcode = @Miniapp::get('default')->getMiniappCode($path);

            return [
                'qrcode' => $qrcode
            ];
        }
        else {
             // 小程序码
            $qrcode = @Miniapp::get('default')->getMiniappCode($path, false);

            return $qrcode;
        }
    }

    // 微信见面获取js初始化数据
    public function jssdkConfig(Request $req)
    {
        $rule = [
            'url' => ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $url = $req->url;

        $apis = [
            'chooseWXPay',
            'updateAppMessageShareData',
            'updateTimelineShareData',
            'scanQRCode'
        ];

        $config = [];
        if (env('WECHAT_OFFICIAL_ACCOUNT_APPID')) {
            $config = Wechat::get()->jssdkConfig($url, $apis);
        }

        return [
            'config' => $config
        ];
    }

    // 获取跳转小程序的url
    public function getUrl(Request $req)
    {
        $rule = [
            'path' => ['required'],
            // "query" => ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest();

        $path = $req->path;

        $token = @Miniapp::get('default')->access_token->getToken()['access_token'];

        $url  = 'https://api.weixin.qq.com/wxa/generate_urllink?access_token=' . $token;

        $http = new HttpClient();

        $data = $http->post($url, [
            "path" => $path,
            "query"  => $req->input('query')
        ], [
            'Content-Type' => 'application/json'
        ]);

        $data = json_decode($data);

        $url = $data->url_link;

        return [
            'url' => $url
        ];
    }

}
