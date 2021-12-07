<?php
namespace Timmackay\Stt;

require '../init.php';


//throw error if no 'data' value was submitted
if (!$_GET['data']) exit('Incorrect usage of API');


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

$csvToArray = new CsvToArray(DEFAULT_DATA_FILEPATH);

$data = $csvToArray->filterByWhitelist($whitelist);

echo json_encode($data);