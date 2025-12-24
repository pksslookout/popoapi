<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

use Modules\Core\Entities\FormId;
use \EasyWeChat;
use Auth;
use Setting;
use Log;
use Cache;

class MiniappService
{
    public $clientName;
    public $miniapp;
    public $appId;

    public function __construct($clientName = NULL)
    {
        if ($clientName) {
            $this->appId = config('wechat.mini_program.' . $clientName . '.app_id');
            $this->clientName = $clientName;
            $this->miniapp = EasyWeChat::miniProgram($clientName);
        }
    }

    public function get($clientName = NULL) 
    {
        $clientName = $clientName ?: Auth::clientName();

        if (!$clientName || $clientName === 'default') {
            // 没有指定clientName，则默认使用配置的第一个小程序
            $clientName = array_keys(config('env.miniapp'))[0];
        }

        return new MiniappService($clientName);
    }

    public function __get($name){
        return $this->miniapp->$name;
    }

    public function getUserInfo($code, $iv, $encryptData)
    {
        $miniProgram = $this->miniapp;

        $res = $miniProgram->auth->session($code);

        // \Log::error($res);

        if (isset($res['errcode']) || !isset($res['session_key']) || !isset($res['openid']) ) {
            ThrowException::Conflict('登陆失败，请联系客服处理:10055');
        }

        $data = $miniProgram->encryptor->decryptData($res['session_key'], $iv, $encryptData);

        $data = array_merge($data, $res);
        
        return $data;
    }


    public function sendSubscribeMessage($user, $message) 
    {

        $miniProgram = $this->miniapp;


        if (!@$message['touser'])
            $message['touser'] = $user->getOpenid('miniapp', $this->clientName);


        if (!@$message['touser'])
            return false;

        $res = $miniProgram->subscribe_message->send($message);

        if (@$res['errcode'] != 0) {
            // Log::channel('subscribeMessage')->error($message);
            Log::channel('subscribeMessage')->error('订阅消息发送失败 - ' . $user->id . ' - ' . $user->name . ' - ' . $message['page']);
            Log::channel('subscribeMessage')->error(@$res['errmsg'] ?: $res);
            return false;
        }

        return true;
    }

    public function getMiniappCode($path, $base64 = true)
    {
        $miniapp = $this->miniapp;
        $minutes = 30;

        if (is_string($miniapp)) {
            $md5 = md5($miniapp . $path . 'ca');
            $miniapp = $this->get($miniapp);
        }
        else {
            $md5 = md5($path . 'ca');
        }

        if (!$base64) {
            return $miniapp->app_code->get($path);
        }

        $miniappCode = Cache::remember($md5, $minutes, function () use ($miniapp, $path) {
            $code = $miniapp->app_code->get($path);
            return base64_encode($code);
        });

        return $miniappCode;
    }

    public function uploadExpress($info)
    {
        $miniapp = $this->miniapp;

        $accessToken = $miniapp->access_token->getToken()['access_token'];

        $path = 'wxa/sec/order/upload_shipping_info?access_token=' . $accessToken;

        $res = $miniapp->httpPostJson($path, $info);

        if (@$res['errcode']) {
            \Log::error('微信上传发货信息管理失败');
            \Log::error($info);
            \Log::error($res);
        }

        return [];

    }
}
