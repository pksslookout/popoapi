<?php

/*
 * This file is part of the overtrue/laravel-wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'debug' => true,
    'default' => 'default',
    'drivers' => [
        'default' => [
            'access_key'  => env('BYTEDANCE_APPID'),
            'secret_key'  => env('BYTEDANCE_SECRET'),

            'payment_app_id' => env('BYTEDANCE_APPID'),
            'payment_merchant_id' => env('BYTEDANCE_MCH_ID'),
            'payment_secret' => env('BYTEDANCE_MCH_KEY'),
            // 'cache' => $redisCache, 
        ],
    ],
];
