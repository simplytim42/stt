<?php
namespace Timmackay\Stt;

class GamesAndGoals extends CsvToArray
{
    private $filteredData;
    private $whitelist = [
        'Date'=>'',
        'Team'=>'',
        'Games Played'=>'',
        'Goals Scored'=>''
    ];

    public function getGamesAndGoals()
    {
        $this->convertCsvToArray();

        foreach ($this->data as $dataRow) {
            $this->filteredData[] = array_intersect_key($dataRow, $this->whitelist);
        }

        return $this->filteredData;
    }
}