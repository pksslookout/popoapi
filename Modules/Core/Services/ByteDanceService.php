<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

// use Modules\Core\Entities\FormId;
// use \EasyWeChat;
use Auth;
use Setting;
use Log;
use Cache;

use \Qbhy\TtMicroApp\TtMicroApp;

class ByteDanceService
{
    public $clientName;
    public $miniapp;
    public $appId;

    public function __construct($clientName = 'default')
    {
        $this->clientName = $clientName;

        $config = config('byteDance');
        $factory = new \Qbhy\TtMicroApp\Factory($config);

        $this->miniapp = $factory->make($clientName);
    }

    public function get($clientName = NULL) 
    {
        $clientName = $clientName ?: Auth::clientName();
        return new ByteDanceService($clientName);
    }

    public function __get($name){
        return $this->miniapp->$name;
    }

    public function getUserInfo($code, $iv, $encryptData)
    {
        $miniProgram = $this->miniapp;

        $res = $miniProgram->auth->session($code);

        if (isset($res['errcode']) || !isset($res['session_key']) || !isset($res['openid']) ) {
            ThrowException::Conflict('登陆失败，请联系客服处理:10055');
        }

        $data = $miniProgram->decrypt->decrypt($encryptData, $res['session_key'], $iv);
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
            Log::error($res);
            Log::error('订阅消息发送失败-');
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

}
