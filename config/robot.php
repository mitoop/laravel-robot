<?php

return [
    'default' => ['feishu.demo'],
    'show_env' => true,
    'env' => env('APP_ENV', 'production'),
    'timeout' => 3,
    'channels' => [
        'feishu' => [
            'demo' => [
                'webhook' => '00000000-0000-0000-0000-000000000000',
                'at' => ['all'],
                'secret' => '',
            ],
        ],
        'wecom' => [
            'demo' => [
                'webhook' => 'key',
                'at' => ['all'],
            ],
        ],
        'dingding' => [
            'demo' => [
                'webhook' => 'access_token',
                'at' => ['all'],
                'secret' => '',
            ],
        ],
    ],
];
