#!/usr/bin/env php
<?php declare(strict_types=1);

    //  default root path
    define('ROOT_DIR', dirname(__DIR__));

    // include vendor
    include_once ROOT_DIR . '/vendor/autoload.php';

    // start application
    $app = new App();
    $app->run();

