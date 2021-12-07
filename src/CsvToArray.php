<?php
namespace Timmackay\Stt;

class CsvToArray
{
    protected $pathToCsv;
    protected $data = [];

    public function __construct($pathToCsv)
    {
        $this->pathToCsv = $pathToCsv;
    }

    protected function convertCsvToArray(): void
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