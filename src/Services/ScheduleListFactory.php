<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListFactory
    implements ScheduleListFactoryInterface
{
    /**
     * @var ScheduleListItemFactoryInterface
     */
    private $scheduleListItemFactory;
    /**
     * @var ScheduleListMock
     */
    private $scheduleList;

    public function __construct(ScheduleListItemFactoryInterface $scheduleListItemFactory){
        $this->scheduleListItemFactory = $scheduleListItemFactory;
        $this->scheduleList = new ScheduleListMock();
    }

    public function getScheduleForCurrentNode(): ScheduleListInterface
    {
        return new ScheduleListMock();
    }
}
