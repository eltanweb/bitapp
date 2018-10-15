<?php declare(strict_types=1);

namespace Bitapp\CoreApi\Interfaces;

/**
 * Один из главных объектов в системе в нем регистрируются все биржы для работы.
 * когда одна из них закончила работу, она извещает остальные компоненты системы для
 * пересчета показателей.
 * Interface Observe
 * @package Bitapp\CoreApi\Interfaces
 */
interface Observe
{
    public function unpdate();
}