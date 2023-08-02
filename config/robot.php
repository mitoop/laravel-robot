<?php

return [
    'default' => ['feishu.jishu'],
    'env' => env('APP_ENV', 'production'),
    'timeout' => 3,
    'channels' => [
        'feishu' => [
            'demo' => [
                'webhook' => '00000000-0000-0000-0000-000000000000',
                'at' => ['all'],
                'secret' => '',
                'show_env' => true,
            ],
        ],
        'wecom' => [
            'demo' => [
                'webhook' => 'key',
                'at' => ['all'],
                'show_env' => true,
            ],
        ],
        'dingding' => [
            'demo' => [
                'webhook' => 'access_token',
                'at' => ['all'],
                'secret' => '',
                'show_env' => true,
            ],
        ],
    ],
];
