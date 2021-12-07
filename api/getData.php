<?php
namespace Timmackay\Stt;

require '../vendor/autoload.php';

//throw error if no data value was submitted
if (!$_GET['data']) exit('{"Error":"Incorrect usage of API"}');

//prepare to react
$defaultFile = $_SERVER['DOCUMENT_ROOT'].'/data/footy.csv';
$csvToArray = new CsvToArray($defaultFile);


//react to the data value requested
if ($_GET['data'] === 'loc') {
    $data = Locations::getData($csvToArray);
}

// if ($_GET['data'] === 'gag') {
//     $whitelist = DataWhitelists::gamesAndGoals();
// }

if ($_GET['data'] === 'tog') {
    $data = TypesOfGoals::getData($csvToArray);
}

if ($_GET['data'] === 'sac') {
    $data = ScoutAndCamera::getData($csvToArray);
}

echo json_encode($data);