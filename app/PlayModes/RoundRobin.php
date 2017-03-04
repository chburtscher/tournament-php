<?php

namespace App\PlayModes;


use App\Game;
use App\Team;
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
        for ($i = 0; $i<$tournament->numberOfTeams; $i++){
            for ($j = $i + 1; $j<$tournament->numberOfTeams; $j++) {
                $game = new Game();
                $games[]=$game;
                $game->team1=$tournament->teams[$i];
                $game->team2=$tournament->teams[$j];
            }
        }
        $this->assignSchedule($tournament, $games);
        $this->assignReferee($tournament, $games);
        return $games;
    }

    private function assignSchedule(Tournament $tournament, array $games) {
        $maxGamesPerRound = floor($tournament->numberOfTeams / 3);
        $gamesPerRound = min($maxGamesPerRound, $tournament->numberOfFields);
        $rounds = ceil(count($games) / $gamesPerRound);
        for ($i=0; $i<$rounds; $i++){
            for ($j=0; $j<$gamesPerRound; $j++){
                $game = $this->getGameForSlot($games, $i);
                if ($game != null) {
                    $game->round = $i;
                    $game->field = $j;
                }
            }
        }
    }

    private function getGameForSlot(array $games, $round) {
        foreach ($games as $game) {
            if ($game->round !== null) {
                continue;
            } elseif (!$this->isTeamAvailable($games, $game->team1, $round)){
                continue;
            } elseif (!$this->isTeamAvailable($games, $game->team2, $round)){
                continue;
            }


            return $game;
        }
    }

    private function isTeamAvailable(array $games, Team $team, $round) {
        foreach ($games as $game) {
            if ($game->round !== $round ) {
                continue;
            }

            if ($game->team1 == $team || $game->team2 == $team || $game->referee == $team) {
                return false;
            }
        }
        return true;
    }

    private function  assignReferee(Tournament $tournament, array $games) {
        foreach ($games as $game) {
            $availableReferees = [];
            foreach ($tournament->teams as $team) {
                if ($this->isTeamAvailable($games, $team, $game->round)){
                    $availableReferees[] = $team;
                }
            }



            $index = mt_rand(0, count($availableReferees)-1);
            $game->referee = $availableReferees[$index];
        }
    }
}

