<?php

namespace Bitapp\CoreApi\Command;

use Bitapp\CoreApi\Interfaces\CommandInterface;
use Bitapp\CoreApi\Router\Request\RequestContext;

class CommandBase implements CommandInterface
{
    public function exec(RequestContext $context)
    {
        // TODO: Implement exec() method.
    }

}