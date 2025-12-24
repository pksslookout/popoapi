<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

use \EasyWeChat;
use Auth;
use Setting;
use Log;

class WechatService
{
    public $clientName;
    public $app;
    public $appId;

    public function __construct($clientName = NULL)
    {
    }

    public function get($clientName = NULL) 
    {
        $clientName = $clientName ?: Auth::clientName() ?: 'default';

        $config = config('wechat.official_account.' . $clientName);
        $this->appId = $config['app_id'];
        $this->clientName = $clientName;
        $this->app = EasyWeChat::officialAccount($clientName);

        return $this;
    }

    public function getUser($code = NULL)
    {
        return $this->app->oauth->user();
    }

    public function jssdkConfig($url, $apis)
    {
        $this->app->jssdk->setUrl($url);
        return json_decode($this->app->jssdk->buildConfig($apis));
    }

    public function sendTemplateMessage($user, $message)
    {
        if (!@$message['touser'])
            $message['touser'] = $user->routeNotificationForTemplateMessage($this->clientName);

        if (!@$message['touser'])
            return false;

        $res = $this->app->template_message->send($message);

        if (@$res['errcode'] != 0) {
            Log::error($res);
            Log::error('模板消息发送失败-');
            return false;
        }

        return true;
    }
}
