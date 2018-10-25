<?php

namespace Bitapp\CoreApi\Router;

use Bitapp\CoreApi\Command\Command;
use Bitapp\CoreApi\Router\Request\RequestContext;

class Router
{
    /****
     * Context application
     * @var RequestContext
     */
    protected $context;

    /*****
     * collection of routers
     * @var
     */
    protected $collection;

    /****
     * Router constructor.
     * @param RequestContext|null $context
     */
    public function __construct(RequestContext $context = null)
    {
        $this->context = $context ?: new RequestContext();
    }

    public function execute(): Command
    {
        $cmd = new Command();
        return $cmd;
    }

    private function resolveCommand()
    {

    }
}