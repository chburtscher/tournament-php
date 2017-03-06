<?php
/**
 * Created by PhpStorm.
 * User: cbellmann
 * Date: 27.02.17
 * Time: 19:57
 */

namespace Tests\PlayModes;

use App\Game;
use App\PlayModes\PlayModeInterface;
use App\PlayModes\RoundRobin;
use App\Team;
use App\Tournament;
use Tests\TestCase;

class RoundRobinTest extends TestCase
{
    /**
     * @var PlayModeInterface
     */
    private $playMode;
    private $tournament;

    public function setUp()
    {
        parent::setUp();

        $this->playMode = new RoundRobin();

        $team1 = new Team();
        $team1->name = 1;

        $team2 = new Team();
        $team2->name = 2;

        $team3 = new Team();
        $team3->name = 3;

        $team4 = new Team();
        $team4->name = 4;

        $team5 = new Team();
        $team5->name = 5;

        $team6 = new Team();
        $team6->name = 6;

        $team7 = new Team();
        $team7->name = 7;

        $this->tournament = new Tournament();
        $this->tournament->teams = [
            $team1,
            $team2,
            $team3,
            $team4,
            $team5,
            $team6,
            $team7,
        ];
        $this->tournament->numberOfTeams = count($this->tournament->teams);
        $this->tournament->numberOfFields = 3;
    }

    public function testNumberOfGames()
    {
        $games = $this->playMode->calculateGames($this->tournament);

        $this->assertCount(21, $games);
    }

    public function testCorrectGames()
    {
        $games = $this->playMode->calculateGames($this->tournament);

        $this->printGames($games);

        $this->assertNoConflict($games);

        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[1]);
        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[2]);
        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[3]);
        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[4]);
        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[5]);
        $this->assertHasGame($games, $this->tournament->teams[0], $this->tournament->teams[6]);
        $this->assertHasGame($games, $this->tournament->teams[1], $this->tournament->teams[2]);
        $this->assertHasGame($games, $this->tournament->teams[1], $this->tournament->teams[3]);
        $this->assertHasGame($games, $this->tournament->teams[1], $this->tournament->teams[4]);
        $this->assertHasGame($games, $this->tournament->teams[1], $this->tournament->teams[5]);
        $this->assertHasGame($games, $this->tournament->teams[1], $this->tournament->teams[6]);
        $this->assertHasGame($games, $this->tournament->teams[2], $this->tournament->teams[3]);
        $this->assertHasGame($games, $this->tournament->teams[2], $this->tournament->teams[4]);
        $this->assertHasGame($games, $this->tournament->teams[2], $this->tournament->teams[5]);
        $this->assertHasGame($games, $this->tournament->teams[2], $this->tournament->teams[6]);
        $this->assertHasGame($games, $this->tournament->teams[3], $this->tournament->teams[4]);
        $this->assertHasGame($games, $this->tournament->teams[3], $this->tournament->teams[5]);
        $this->assertHasGame($games, $this->tournament->teams[3], $this->tournament->teams[6]);
        $this->assertHasGame($games, $this->tournament->teams[4], $this->tournament->teams[5]);
        $this->assertHasGame($games, $this->tournament->teams[4], $this->tournament->teams[6]);
        $this->assertHasGame($games, $this->tournament->teams[5], $this->tournament->teams[6]);
    }

    private function assertHasGame($games, $teamA, $teamB)
    {
        /** @var Game $game */
        foreach ($games as $game) {
            if ($game->team1 == $teamA && $game->team2 == $teamB) {
                return;
            } elseif ($game->team1 == $teamB && $game->team2 == $teamA) {
                return;
            }
        }

        $this->fail("No game with teams {$teamA->name} and {$teamB->name}.");
    }

    private function assertNoConflict(array $games)
    {
        $teamRoundAssignments = [];
        $roundFieldAssignments = [];

        /** @var Game $game */
        foreach ($games as $game) {
            // First check if this field is used multiple times in the same round
            if (isset($roundFieldAssignments[$game->round][$game->field])) {
                $this->fail("Field {$game->field} is used twice in round {$game->round}.");
            }
            $roundFieldAssignments[$game->round][$game->field] = true;

            // Check team 1
            if (isset($teamRoundAssignments[$game->round][$game->team1->name])) {
                $this->fail("Team '{$game->team1->name}' is used twice in round {$game->round}.");
            }
            $teamRoundAssignments[$game->round][$game->team1->name] = true;

            // Check team 2
            if (isset($teamRoundAssignments[$game->round][$game->team2->name])) {
                $this->fail("Team '{$game->team2->name}' is used twice in round {$game->round}.");
            }
            $teamRoundAssignments[$game->round][$game->team2->name] = true;

            // Check referee
            if (isset($teamRoundAssignments[$game->round][$game->referee->name])) {
                $this->fail("Team '{$game->referee->name}' is used twice in round {$game->round}.");
            }
            $teamRoundAssignments[$game->round][$game->referee->name] = true;
        }
    }

    private function printGames(array $games) {
        echo "Team 1 | Team 2 | Referee | Round | Field\n" .
             "-----------------------------------------\n";

        foreach ($games as $game) {
            echo str_pad($game->team1->name, 6, " ") . " | " .
                 str_pad($game->team2->name, 6, " ") . " | " .
                 str_pad($game->referee->name, 7, " ") . " | " .
                 str_pad($game->round, 5, " ") . " | " .
                 str_pad($game->field, 5, " ") . "\n";
        }
    }
}