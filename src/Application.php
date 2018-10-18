<?php declare(strict_types=1);

namespace Bitapp;
use Bitapp\CoreApi\Request\RequestContext;
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
        $application = new Application($debug, $config);
        $application->Run();
    }

    /**
     *
     */
    public function Run()
    {
        $context = new RequestContext();
        $cmdResolver = new Command(Resolver);
        $cmd = $cmdResolver->getCommand($context);
        $cmd->execute($context);
    }
}