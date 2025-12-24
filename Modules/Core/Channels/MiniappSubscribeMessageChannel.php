<?php

namespace Modules\Core\Channels;

use Illuminate\Notifications\Notification;
use Miniapp;
use Setting;

class MiniappSubscribeMessageChannel
{
    /**
     * 发送给定通知
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $res = $notification->toMiniappSubscribeMessage($notifiable);

        if (!$res)
            return false;

        list($miniapp, $templateType, $message) = $res;

        // 模板id
        $cacheKey = 'miniapp_subscribe_template_ids_1';
        $templateId = @Setting::get($cacheKey)[$templateType];

        // 没有模板id. 先添加
        if (!$templateId) {
            $info = config('subscribeMessage.miniapp.' . $templateType);

            $tid = $info['id']; 
            $kidList = $info['words'];      
            $sceneDesc = $info['desc'];
            $info = $miniapp->subscribe_message->addTemplate($tid, $kidList, $sceneDesc);

            $templateId = @$info['priTmplId'];

            $ids = @Setting::get($cacheKey) ?: [];
            $ids[$templateType] = $templateId;
            Setting::set($cacheKey, $ids);
        }

        if (!$templateId) {
            \Log::error($info);
            \Log::error('无对应订阅消息');
            return false;
        }

        $message['template_id'] = $templateId;

        $miniapp->sendSubscribeMessage($notifiable, $message);
    }
}