<?php

return [
    'routes'          => [
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

    // app root path
    'rootPath'        => __DIR__ . '/../src',

    // true = native | false = mustache
    'nativeTemplates' => false,
];