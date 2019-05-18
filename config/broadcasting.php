<?php

return [
    'default' => 'log',
    'connections' => [
        'pusher' => [
            'driver' => 'pusher',
            'key' => '',
            'secret' => '',
            'app_id' => '',
            'options' => [
                'cluster' => '',
                'encrypted' => true,
            ],
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],
        'log' => [
            'driver' => 'log',
        ],
        'null' => [
            'driver' => 'null',
        ],
    ],
];
