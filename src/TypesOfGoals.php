<?php
namespace Timmackay\Stt;

class TypesOfGoals
{
    static public function getData(CsvtoArray $csvToArray): array
    {
        $returnData = [
            'Derby' => [
                'Set Piece Goals' => 0,
                'Open Play Goals' => 0,
                'Penalty Goals' => 0
            ],
            'Ipswich' => [
                'Set Piece Goals' => 0,
                'Open Play Goals' => 0,
                'Penalty Goals' => 0
            ]
        ];
        
        //loop through array and extract relevant goal data
        foreach ($csvToArray->getArray() as $data) {
            $team = $data['Team'];

            $returnData[$team]['Open Play Goals'] += $data['Open Play Goals'];
            $returnData[$team]['Set Piece Goals'] += $data['Set Piece Goals'];
            $returnData[$team]['Penalty Goals'] += $data['Penalty Goals'];
        }

        return $returnData;
    }
}