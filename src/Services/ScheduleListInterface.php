<?php declare(strict_types = 1);

namespace App\Services;

interface ScheduleListInterface
{
    /**
     * @return ScheduleListItemInterface[]
     */
    public function getList(): array;

    public function addToList(ScheduleListItemInterface $scheduleListItem);
}
