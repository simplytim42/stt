<?php
namespace Timmackay\Stt;

require '../vendor/autoload.php';

//throw error if no data value was submitted
if (!in_array($_GET['data'], ['loc', 'gag', 'tog', 'sac', 'custom'])){
    exit('{"Error":"Incorrect usage of API data"}');
}

//prepare to react
$defaultFile = $_SERVER['DOCUMENT_ROOT'].'/data/footy.csv';
$csvToArray = new CsvToArray($defaultFile);


//react to the data value requested
if ($_GET['data'] === 'loc') {
    $data = Locations::getData($csvToArray);
}

if ($_GET['data'] === 'gag') {
    $data = GamesAndGoals::getData($csvToArray);
}

if ($_GET['data'] === 'tog') {
    $data = TypesOfGoals::getData($csvToArray);
}

if ($_GET['data'] === 'sac') {
    $data = ScoutAndCamera::getData($csvToArray);
}

if ($_GET['data'] === 'custom') {
    //throw error if no args were submitted
    if (empty($_GET['args'])) exit('{"Error":"Incorrect usage of API args"}');
    $data = CustomRequest::getData($csvToArray);
}

//send data to client as json
echo json_encode($data);