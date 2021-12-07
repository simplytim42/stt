<?php
namespace Timmackay\Stt;

class ScoutAndCamera
{
    static public function getData(CsvtoArray $csvToArray): array
    {
        //prepare dataset
        $returnData = [
            'Derby' => [],
            'Ipswich' => []
        ];
        
        //loop through array and extract relevant goal data
        foreach ($csvToArray->getArray() as $data) {
            $team = $data['Team'];

            $returnData[$team][] = [
                'Date' => $data['Date'],
                'Camera Footage' => $data['Camera Footage'],
                'Scouting Reports' => $data['Scouting Reports']
            ];
        }

        return $returnData;
    }
}