<?php declare(strict_types = 1);

namespace App\Services;

interface ScheduleListFactoryInterface
{
    public function getScheduleForCurrentNode(): ScheduleListInterface;
}
