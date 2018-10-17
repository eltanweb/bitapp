<?php
//declare(strict_types=1);

    //  default root path
    define('ROOT_DIR', dirname(__DIR__));

    // include vendor
    include_once ROOT_DIR . '/vendor/autoload.php';

    $config = \Bitapp\Config::load();

    // start application
    $app = new \Bitapp\Application(true);
    $app->Run($config);

