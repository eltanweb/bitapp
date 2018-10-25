<?php declare(strict_types=1);

namespace Bitapp;
use Bitapp\CoreApi\Router\Request\RequestContext;
use Bitapp\CoreApi\Router\Router;
use MongoDB\Driver\Command;

/**
 * Class Application
 * @package Bitapp
 */
class Application
{

    /**
     * @var
     */
    private $applicationHelper;

    /**
     * @var bool
     */
    private $debugMode;

    /**
     * Application constructor.
     */
    private function __construct($debug = null)
    {
        $this->debugMode = $debug;
    }

    /**
     * @param bool $debug
     * @param ConfigLoader $config
     */
    public static function init($debug = false, ConfigLoader $config)
    {
        return new Application($debug, $config);
    }

    /**
     *
     */
    public function Run()
    {
        $context = new RequestContext();
        $router = new Router($context);
        $cmd = $router->execute();
        $cmd->exec($context);
    }
}