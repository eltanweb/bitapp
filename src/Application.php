<?php declare(strict_types=1);

namespace Bitapp;

/**
 * Class Application
 * @package Bitapp
 */
class Application
{
    /**
     * @var bool
     */
    private $debugMode;

    /**
     * Application constructor.
     */
    public function __construct($debug = null)
    {
        $this->debugMode = $debug;
    }

    /**
     *
     */
    public function Run(Config $config)
    {

        var_dump($_SERVER);

        $context = new Context();
    }
}