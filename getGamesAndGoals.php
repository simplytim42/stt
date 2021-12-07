<?php
namespace Timmackay\Stt;

require 'init.php';

echo '<pre>';

$gag = new GamesAndGoals(DEFAULT_DATA_FILEPATH);

$data = $gag->getGamesAndGoals();

echo json_encode($data);