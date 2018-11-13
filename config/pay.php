<?php

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID', ''),
        'ali_public_key' => env('ALIPAY_PUBLIC_KEY', ''),
        'private_key'    => env('ALIPAY_PRIVATE_KEY', ''),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => env('WECHATPAY_APP_ID', ''),
        'mch_id'      => env('WECHATPAY_MCH_ID', ''),
        'key'         => env('WECHATPAY_KEY', ''),
        'cert_client' => env('WECHATPAY_CERT_CLIENT', ''),
        'cert_key'    => env('WECHATPAY_CERT_KEY', ''),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
