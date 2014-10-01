<?php

return [
    'routes'    => [
        [
            'request'    => 'GET',
            'pattern'    => '^/say/hello$',
            'controller' => 'App\Controllers\SayController::hello',
        ],
        [
            'pattern'    => '^$',
            'controller' => 'App\Controllers\DefaultController::index',
        ],
    ],

    // ------------------------------------------

    'paths'     => [
        'src'    => __DIR__ . '/../../App/',
        'public' => __DIR__ . '/../../../public/',
    ],

    // ------------------------------------------

    'templates' => [
        'isNative' => false,
    ],

    // ------------------------------------------

    'locales'   => [
        'default'   => 'en',
        'available' => ['en', 'de'],
    ],
];