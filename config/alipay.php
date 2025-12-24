<?php

return [
    'default' => [
        'app_id' => env('ALIPAY_MINIAPP_APPID', 'your-app-id'),         // AppID
        'secret' => env('ALIPAY_APPID', 'your-app-secret'),    // AppSecret
        'token' => env('ALIPAY_APPID', 'your-token'),           // Token
        'aes_key' => env('ALIPAY_APPID', ''),                 // EncodingAESKey

        /*
         * OAuth 配置
         *
         * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
         * callback：OAuth授权完成后的回调页地址(如果使用中间件，则随便填写。。。)
         */
        // 'oauth' => [
        //     'scopes'   => array_map('trim', explode(',', env('WECHAT_OFFICIAL_ACCOUNT_OAUTH_SCOPES', 'snsapi_userinfo'))),
        //     'callback' => env('WECHAT_OFFICIAL_ACCOUNT_OAUTH_CALLBACK', '/examples/oauth_callback.php'),
        // ],
    ]
];
