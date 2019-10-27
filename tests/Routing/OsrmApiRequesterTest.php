<?php

namespace App\Tests\Routing;

use App\Services\OsrmApi\OsrmApiRequester;
use PHPUnit\Framework\TestCase;

class OsrmApiRequesterTest extends TestCase
{
    public function test_requestJson_withValidInputs_returnsJsonSuccessfully()
    {
        $sut = new OsrmApiRequester();
        $validUrl = 'http://router.project-osrm.org/route/v1/driving/13.388860,52.517037;13.397634,52.529407;13.428555,52.523219?overview=false';



        $actual = $sut->requestJson($validUrl);
        $expected = json_encode('{
    "routes": [
        {
            "legs": [
                {
                    "summary": "",
                    "weight": 623.2,
                    "duration": 413.2,
                    "steps": [],
                    "distance": 1999.6
                },
                {
                    "summary": "",
                    "weight": 693.6,
                    "duration": 505.5,
                    "steps": [],
                    "distance": 2838.1
                }
            ],
            "weight_name": "routability",
            "weight": 1316.8000000000002,
            "duration": 918.7,
            "distance": 4837.7
        }
    ],
    "waypoints": [
        {
            "hint": "a4ZCivGGQoosAAAAdQEAAAAAAAAAAAAASjFaQU1xpUEAAAAAAAAAACwAAAB1AQAAAAAAAAAAAAB6pgAA_kvMAKlYIQM8TMwArVghAwAA7wqphfCb",
            "distance": 4.231665624816857,
            "name": "Friedrichstraße",
            "location": [
                13.388798,
                52.517033
            ]
        },
        {
            "hint": "GOcigMwAQooJAAAADAAAAAAAAAAJAQAAW7-PQOKcyEAAAAAApq6DQgkAAAAMAAAAAAAAAJEAAAB6pgAAf27MABiJIQOCbswA_4ghAwAAXwWphfCb",
            "distance": 2.7893928415656375,
            "name": "Torstraße",
            "location": [
                13.397631,
                52.529432
            ]
        },
        {
            "hint": "geUigP___38dAAAAyAAAACQAAABKAAAAsowKQkpQX0Lx6yZCvsQGQh0AAABkAAAAJAAAACUAAAB6pgAASufMAOdwIQNL58wA03AhAwMAvxCphfCb",
            "distance": 2.2265954222656257,
            "name": "Platz der Vereinten Nationen",
            "location": [
                13.428554,
                52.523239
            ]
        }
    ],
    "code": "Ok"
}
');
        $this->assertEquals($expected,$actual);
        $this->markTestIncomplete('api call to be implemented.');
    }
}
