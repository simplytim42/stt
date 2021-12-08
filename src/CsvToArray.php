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

    public function getArray(): array
    {
        $this->convertCsvToArray();
        return $this->data;
    }

    protected function convertCsvToArray(): void
    {
        //open csv file
        $handle = fopen($this->pathToCsv,'r');

        //extract headers
        $headers = fgetcsv($handle, 1000, ',');
        $headerCount = count($headers);

        $dataCount = 0;

        //read rest of csv file
        while ($data = fgetcsv($handle, 1000, ',')) {

            if (empty($data[0])) {
                //row is not complete so ignore
                continue;
            }
            
            //loop through each column and build up an associative array
            for ($i=0; $i < $headerCount; $i++) { 
                $this->data[$dataCount][$headers[$i]] = $data[$i];
            }
            
            $dataCount++;
        }
    }
}