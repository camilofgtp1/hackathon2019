<?php declare(strict_types = 1);

namespace App\Services\OsrmApi;

class OsrmApiRequester
{

    function callAPI($method, $url, $data){
        $curl = curl_init();

        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'APIKEY: 111111111111111111111',
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);
        return $result;
    }

    public function requestJson(
        /** @noinspection PhpUnusedParameterInspection */
        $url)
    {
        $curl = curl_init();
        curl_close($curl);


        return json_encode('{
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
    }
}
