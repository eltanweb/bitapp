<?php declare(strict_types=1);

    //  default root path
    define('ROOT_DIR', dirname(__DIR__));

    // include vendor
    include_once ROOT_DIR . '/vendor/autoload.php';

    $config = \Bitapp\ConfigLoader::execute(
            [
              ROOT_DIR.'/config/env.php',
              ROOT_DIR.'/config/main.php'
            ]
    );

    // start application
    $app = \Bitapp\Application::init(false, $config);
    $app->Run();