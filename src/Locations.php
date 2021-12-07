<?php
namespace Timmackay\Stt;

class Locations
{
    static public function getLocations(CsvtoArray $csvToArray): array
    {
        $returnData = [
            'Derby' => [],
            'Ipswich' => []
        ];

        
        //loop through array and extract relevant location data
        foreach ($csvToArray->getArray() as $data) {
            $team = $data['Team'];
            $location = $data['Location'];

            if (!key_exists($location, $returnData[$team])) {
                //this location hasn't yet been added to the array so we can add it now
                $returnData[$team][$location] = 0;
            }

            //increment the location by one to create a tally
            $returnData[$team][$location]++;
        }

        return $returnData;
    }
}