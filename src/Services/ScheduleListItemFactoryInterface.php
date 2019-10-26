<?php declare(strict_types = 1);

namespace App\Services;

interface ScheduleListItemFactoryInterface
{
    public function getScheduleForCurrentNode(): ScheduleListInterface;
}
