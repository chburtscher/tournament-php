<?php
/**
 * Created by PhpStorm.
 * User: cbellmann
 * Date: 27.02.17
 * Time: 19:57
 */

namespace Tests\PlayModes;

use App\PlayModes\PlayModeInterface;
use App\PlayModes\RoundRobin;
use App\Team;
use App\Tournament;
use Tests\TestCase;

class RoundRobinTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlayModeInterface
     */
    private $playMode;
    private $tournament;

    public function setUp()
    {
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

    public function testFoo()
    {
        $games = $this->playMode->calculateGames($this->tournament);

        echo "Team 1, Team2, Schiri, Runde, Feld\n";

        foreach ($games as $game) {
            echo $game->team1->name . ", " . $game->team2->name . ", " . $game->referee->name . ", ". $game->round . ", " . $game->field . "\n";
        }
    }

    private function assertHasGame($games, $teamA, $teamB, $referee)
    {
        foreach ($games as $game) {
            if ($game->team1 == $teamA && $game->team2 == $teamB && $game->referee == $referee) {
                return;
            } elseif ($game->team1 == $teamB && $game->team2 == $teamA && $game->referee == $referee) {
                return;
            }
        }

        $this->fail("No game with teams {$teamA->name} and {$teamB->name}.");
    }
}