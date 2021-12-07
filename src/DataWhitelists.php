<?php
namespace Timmackay\Stt;

class DataWhitelists
{

    static public function locations(): array
    {
        return [
            'Date'=>'',
            'Team'=>'',
            'Location'=>''
        ];
    }

    static public function gamesAndGoals(): array
    {
        return [
            'Date'=>'',
            'Team'=>'',
            'Games Played'=>'',
            'Goals Scored'=>''
        ];
    }

    static public function typesOfGoals(): array
    {
        return [
            'Date'=>'',
            'Team'=>'',
            'Set Piece Goals'=>'',
            'Open Play Goals'=>'',
            'Penalty Goals'=>''
        ];
    }

    static public function scoutAndCamera(): array
    {
        return [
            'Date'=>'',
            'Team'=>'',
            'Camera Footage'=>'',
            'Scouting Reports'=>''
        ];
    }
}