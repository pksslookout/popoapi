<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\Exceptions\NoGatewayAvailableException ;
use Overtrue\EasySms\EasySms;

use ThrowException;
use Cache ;

class ShortMessageService
{
    public function send($phone, $options)
    {
        $easySms = new EasySms(config('sms.config'));

        try {
            $easySms->send($phone, $options);
        }
        catch (NoGatewayAvailableException $e) {
            \Log::error($e->getMessage());
            \Log::error($e->getLastException()->getMessage());
            ThrowException::Conflict('短信发送失败，请稍候重试');
        }
    }

    public function sendCode($phone, $codeType, $userType = 'user')
    {
        // $template = config('sms.'. $codeType .'_code_template') ?: config('sms.simple_code_template');

        $code = strVal(rand(100000, 999009));
        $cacheKey = $userType . '_' . $codeType . '_code_' . $phone;

        Cache::put($cacheKey, $code, 600);

        if (env('SMS_GATEWAY') == 'smsbao') {
            $options = [
                'sign_name' => env('DUANXINBAO_SIGNNAME'),
                'content' => '您的验证码为: ' . $code
            ];
        }
        else {
            $options = [
                'template' => function ($gateway) use ($codeType) {
                    $key = 'sms.templates.' . $gateway->getName();
                    return config($key . '.' . $codeType . '_code') ?: config($key . '.simple_code');
                },
                'data' => function ($gateway) use ($code) {
                    if ($gateway->getName() == 'aliyun') {
                        return [
                            'code' => $code
                        ];
                    }
                    elseif ($gateway->getName() == 'qcloud') {
                        return [
                            1 => $code
                        ];
                    }
                },
            ];
        }

        $this->send($phone, $options);
    }

    // 校验验证码
    public function verifyCode($phone, $code, $codeType, $userType = 'user')
    {
        $cacheKey = $userType . '_' . $codeType . '_code_' . $phone;

        if ( Cache::get($cacheKey) == $code || $code == env('GENERAL_CODE') ) {
            Cache::forget($cacheKey);
            return true;
        }

        return false;
    }
}
