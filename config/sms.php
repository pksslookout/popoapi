<?php

return [
    'app_name' => env('ALIDAYU_APP_NAME'),
    
    'simple_code_template' => env('ALIDAYU_CODE_TEMPLATE'),
    'templates' => [
        'aliyun' => [
            'login_code' => env('ALIDAYU_CODE_TEMPLATE')
        ],
        'qcloud' => [
            'login_code' => env('QCLOUD_CODE_TEMPLATE')
        ]
    ],
    'config' => [
        // HTTP 请求的超时时间（秒）
        'timeout' => 5.0,
        
        // 默认发送配置
        'default' => [
            // 网关调用策略，默认：顺序调用
            'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,
            
            // 默认可用的发送网关
            'gateways' => [
                env('SMS_GATEWAY', 'aliyun')
            ],  
        ],  
        // 可用的网关配置
        'gateways' => [
            'errorlog' => [
                'file' => '/tmp/easy-sms.log',
            ],  
            'aliyun' => [
                'access_key_id' => env('ALIDAYU_APP_KEY'),
                'access_key_secret' => env('ALIDAYU_APP_SECRET'),
                'sign_name' => env('ALIDAYU_CODE_SIGNATURE'),
            ],  
            'smsbao' => [
                'user'  => env('DUANXINBAO_USER'),    //账号
                'password'   => env('DUANXINBAO_PASSWORD'),   //密码
            ],
            'qcloud' => [
                'sdk_app_id' => env('SMS_QCLOUD_SKD_APP_ID'), // 短信应用的 SDK APP ID
                'secret_id' => env('SMS_QCLOUD_SECRET_ID'), // SECRET ID
                'secret_key' => env('SMS_QCLOUD_SECRET_KEY'), // SECRET KEY
                'sign_name' => env('SMS_QCLOUD_SIGN_NAME'), // 短信签名
            ],
        ],  
    ]   

];  
