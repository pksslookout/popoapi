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

// use Codeinfo\LaravelKuaishou\Factory;

use Surpaimb\KuaiShou\Factory;

class KuaishouService
{
    public $clientName;
    public $miniapp;
    public $appId;

    public function __construct($clientName = 'default')
    {
        $this->clientName = $clientName;

        $config = config('kuaishou.mini_program.default');

        $this->miniapp = Factory::make('miniProgram', $config);
    }

    public function get($clientName = NULL) 
    {
        $clientName = $clientName ?: Auth::clientName();
        return new KuaishouService($clientName);
    }

    public function __get($name){
        return $this->miniapp->$name;
    }

    public function getUserInfo($code, $iv, $encryptData)
    {
        $app = $this->miniapp;

        // $res = $app->oauth->code2AccessToken($code);

        $session = $app->auth->session($code);

        // \Log::error($session);

        // $res = $app->auth->session($code);

        if (isset($session['errcode']) || !isset($session['session_key']) || !isset($session['open_id']) ) {
            \Log::error($session);
            ThrowException::Conflict('登陆失败，请联系客服处理:10055');
        }

        // $data = $app->decrypt->decrypt($encryptData, $res['session_key'], $iv);

        $data = $app->encryptor->decryptData($session['session_key'], $iv, $encryptData);

        // \Log::error($data);
        
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
