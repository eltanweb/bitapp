<?php declare(strict_types=1);

    //  default root path
    define('ROOT_DIR', dirname(__DIR__));

    // include vendor
    include_once ROOT_DIR . '/vendor/autoload.php';

    $config = \Bitapp\Config::execute(
            [ 'api' => ROOT_DIR.'/comfig/env.php',
              'db' =>ROOT_DIR.'/config/main.php'
            ]
    );

    // start application
    $app = new \Bitapp\Application(false);
    $app->Run($config);

