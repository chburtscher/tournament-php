<?php
/**
 * Created by PhpStorm.
 * User: cbellmann
 * Date: 27.02.17
 * Time: 19:52
 */

namespace App\PlayModes;


use App\Tournament;

interface PlayModeInterface
{
    function calculateGames(Tournament $tournament);
}