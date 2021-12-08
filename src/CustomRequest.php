<?php
namespace Timmackay\Stt;

class CustomRequest
{
    static public function getData(CsvtoArray $csvToArray): array
    {
        $returnData = [];

        $convertedArgs = self::convertArgs();
        
        //loop through array and extract relevant custom data
        foreach ($csvToArray->getArray() as $data) {
            $singleRowData = [];
            foreach ($convertedArgs as $arg) {
                //build array for this row of data
                $singleRowData[$arg] = $data[$arg];
            }
            //append it to return array
            $returnData[] = $singleRowData;
        }

        return $returnData;
    }

    static private function convertArgs(): array
    {
        $convertedArgs = [];

        //remove any hyphens and capitalise first letter of each word
        foreach ($_GET['args'] as $arg) {
            $arg = str_replace('-', ' ', $arg);
            $arg = ucwords($arg);
            $convertedArgs[] = $arg;
        }

        return $convertedArgs;
    }
}