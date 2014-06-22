<?php

define('ENV', 'DEVELOPMENT');

// ----------------------------------------------

if (ENV === 'LIVE')
{
    $classmap = require __DIR__ . '/../vendor/composer/autoload_classmap.php';

    spl_autoload_register(function ($class) use ($classmap)
    {
        require $classmap[$class];
    });
}
else
{
    require __DIR__ . '/../vendor/autoload.php';
}

// ----------------------------------------------

// load config
$config = require __DIR__ . '/../src/config.php';

// start frontend
\Simplon\Frontend\Frontend::start($config);