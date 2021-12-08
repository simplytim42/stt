<?php
namespace Timmackay\Stt;

class Locations
{
    static public function getData(CsvtoArray $csvToArray): array
    {
        //prepare dataset
        $returnData = [];

        //loop through array and extract relevant location data
        foreach ($csvToArray->getArray() as $data) {
            $team = $data['Team'];
            $location = $data['Location'];
            
            if (!key_exists($location, $returnData)) {
                //new location found so add it to array
                $returnData[$location] = [
                    'Derby' => 0,
                    'Ipswich' => 0
                ];
            }

            //increment the location counter
            $returnData[$location][$team]++;
        }

        return $returnData;
    }
}