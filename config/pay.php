<?php

return [
    'alipay' => [
        'miniapp' => [
            // 支付宝分配的 APPID
            'app_id' => env('ALIPAY_MINIAPP_APPID'),
            // 支付宝异步通知地址
            'notify_url' => env('APP_URL') . '/payment-callback/alipay/default/miniapp',

            // 支付成功后同步通知地址
            'return_url' => env('APP_URL') . '/payment-callback/alipay/default/miniapp',

            // 阿里公共密钥，验证签名时使用
            'ali_public_key' => env('ALIPAY_MINIAPP_PUBLIC_KEY'),

            // 自己的私钥，签名时使用
            'private_key' => env('ALIPAY_MINIAPP_PRIVATE_KEY'),

            // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
            'log' => [
            //    'file' => storage_path('logs/alipay.log'),
            //     'level' => 'debug'
            ],

            // optional，设置此参数，将进入沙箱模式
            // 'mode' => 'dev',
        ],
        'app' => [
            // 支付宝分配的 APPID
            'app_id' => env('ALIPAY_APP_APPID'),
            // 支付宝异步通知地址
            'notify_url' => env('APP_URL') . '/payment-callback/alipay/default/app',

            // 支付成功后同步通知地址
            'return_url' => env('APP_URL') . '/payment-callback/alipay/default/app',

            // 阿里公共密钥，验证签名时使用
            'ali_public_key' => env('ALIPAY_APP_PUBLIC_KEY'),

            // 自己的私钥，签名时使用
            'private_key' => env('ALIPAY_APP_PRIVATE_KEY'),

            // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
            'log' => [
            //    'file' => storage_path('logs/alipay.log'),
            //     'level' => 'debug'
            ],

            // optional，设置此参数，将进入沙箱模式
            // 'mode' => 'dev',
        ],
        'h5' => [
            // 支付宝分配的 APPID
            'app_id' => env('ALIPAY_H5_APPID'),
            // 支付宝异步通知地址
            'notify_url' => env('APP_URL') . '/payment-callback/alipay/default/h5',

            // 支付成功后同步通知地址
            'return_url' => env('APP_URL') . '/payment-callback/alipay/default/h5',

            // 阿里公共密钥，验证签名时使用
            'ali_public_key' => env('ALIPAY_H5_PUBLIC_KEY'),

            // 自己的私钥，签名时使用
            'private_key' => env('ALIPAY_H5_PRIVATE_KEY'),

            // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
            'log' => [
            //    'file' => storage_path('logs/alipay.log'),
            //     'level' => 'debug'
            ],

            // optional，设置此参数，将进入沙箱模式
            // 'mode' => 'dev',
        ],
    ],

    'wechat' => [
        'default' => [
            // oneshop 小程序
            // 公众号 APPID
            'app_id' => env('MINIAPP_APPID') ?: env('WECHAT_OFFICIAL_ACCOUNT_APPID'),
            // 小程序 APPID
            'miniapp_id' => env('MINIAPP_APPID'),
            // APP 引用的 appid
            'appid' => env('APPID'),
            // 微信支付分配的微信商户号
            'mch_id' => env('MCH_ID'),
            // 微信支付异步通知地址
            'notify_url' => env('APP_URL') . '/payment-callback/wechat/default/miniapp',
            // 微信支付签名秘钥
            'key' => env('MCH_KEY'),
            // 客户端证书路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
            'cert_client' => base_path() . '/cert/apiclient_cert.pem',
            // 客户端秘钥路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
            'cert_key' => base_path() . '/cert/apiclient_key.pem',
            // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
            'log' => [
            //    'file' => storage_path('logs/wechat.log'),
            //     'level' => 'debug'
            ],

            // optional
            // 'dev' 时为沙箱模式
            // 'hk' 时为东南亚节点
            // 'mode' => 'dev',
        ],
    ],
];
