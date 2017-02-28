<?php

namespace App\PlayModes;


use App\Game;
use App\Tournament;

class RoundRobin implements PlayModeInterface
{
    /**
     * @param Tournament $tournament
     *
     * @return Game[]
     */
    public function calculateGames(Tournament $tournament) {
        $games=[];
        for ($i=0; $i<$tournament->numberOfTeams; $i++){
            for ($j=$i+1; $j<$tournament->numberOfTeams; $j++){
                $game = new Game();
                $games[]=$game;
                $game->team1=$tournament->teams[$i];
                $game->team2=$tournament->teams[$j];
            }
        }
        $this->assignSchedule($tournament, $games);
        return $games;
    }

    private function assignSchedule(Tournament $tournament, array $games) {
        $maxGamesPerRound = floor($tournament->numberOfTeams / 3);
        $gamesPerRound = min($maxGamesPerRound, $tournament->numberOfFields);
        $rounds = ceil(count($games) / $gamesPerRound);
        for ($i=0; $i<$rounds; $i++){
            for ($j=0; $j<$gamesPerRound; $j++){
                $index = $i * $gamesPerRound + $j;
                if ($index < count($games)) {
                    $games[$index]->round = $i;
                    $games[$index]->field = $j;
                }
            }
        }
    }
}
