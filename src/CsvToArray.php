<?php
namespace Timmackay\Stt;

class CsvToArray
{
    private $pathToCsv;
    private $data = [];

    public function __construct($pathToCsv)
    {
        $this->pathToCsv = $pathToCsv;
    }

    public function filterByWhitelist(array $whitelist): array
    {
        $this->convertCsvToArray();

        //reset array for a clean output
        $filteredData = [];

        foreach ($this->data as $dataRow) {
            $filteredData[] = array_intersect_key($dataRow, $whitelist);
        }

        return $filteredData;
    }

    private function convertCsvToArray(): void
    {
        $handle = fopen($this->pathToCsv,'r');

        $headers = fgetcsv($handle, 1000, ',');
        $headerCount = count($headers);

        $dataCount = 0;

        while ($data = fgetcsv($handle, 1000, ',')) {

            if (empty($data[0])) {
                //row is not complete
                continue;
            }
            
            for ($i=0; $i < $headerCount; $i++) { 
                $this->data[$dataCount][$headers[$i]] = $data[$i];
            }
            
            $dataCount++;
        }
    }
}