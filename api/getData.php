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
    $data = Locations::getLocations($csvToArray);
}

// if ($_GET['data'] === 'gag') {
//     $whitelist = DataWhitelists::gamesAndGoals();
// }

// if ($_GET['data'] === 'tog') {
//     $whitelist = DataWhitelists::typesOfGoals();
// }

// if ($_GET['data'] === 'sac') {
//     $whitelist = DataWhitelists::scoutAndCamera();
// }

echo json_encode($data);