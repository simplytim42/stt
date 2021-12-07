<?php
namespace Timmackay\Stt;

require '../vendor/autoload.php';


//throw error if no 'data' value was submitted
if (!$_GET['data']) exit('{"Error":"Incorrect usage of API"}');


//build whitelist of data fields
$whitelist = [];

if ($_GET['data'] === 'loc') {
    $whitelist = DataWhitelists::locations();
}

if ($_GET['data'] === 'gag') {
    $whitelist = DataWhitelists::gamesAndGoals();
}

if ($_GET['data'] === 'tog') {
    $whitelist = DataWhitelists::typesOfGoals();
}

if ($_GET['data'] === 'sac') {
    $whitelist = DataWhitelists::scoutAndCamera();
}

$defaultFile = $_SERVER['DOCUMENT_ROOT'].'/data/footy.csv';
$csvToArray = new CsvToArray($defaultFile);

$data = $csvToArray->filterByWhitelist($whitelist);

echo json_encode($data);