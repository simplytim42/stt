<?php
namespace Timmackay\Stt;

class GamesAndGoals
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
                'Games Played' => $data['Games Played Smoothed'],
                'Goals Scored' => $data['Goals Scored Smoothed'],
                'Goals Against' => $data['Goals Against Smoothed']
            ];
        }

        return $returnData;
    }
}