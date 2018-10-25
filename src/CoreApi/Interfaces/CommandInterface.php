<?php

namespace Bitapp\CoreApi\Interfaces;

use Bitapp\CoreApi\Router\Request\RequestContext;

interface CommandInterface
{

    public function exec(RequestContext $context);

}