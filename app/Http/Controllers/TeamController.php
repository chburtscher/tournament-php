<?php

namespace App\Http\Controllers;


use App\Team;
use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function showTeamsForm($id)
    {
        // Load number of teams for this tournament
        $tournament = Tournament::find($id);

        return view('pages.teams', ['numberOfTeams' => $tournament->numberOfTeams]);
    }

    public function createTeams(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        $this->create($id, $request->all());
        return redirect('/tournament/' . $id);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            //to-do: implement-rules
        ]);
    }

    protected function create($id, array $data)
    {
        foreach ($data['teams'] as $team) {
            Team::create([
                'name' => $team,
                'tournament_id' => $id
            ]);
        }
    }

    public function showEditFormTeams($id)
    {
        $tournament = Tournament::find($id);
        return view('pages.teams', ['tournament' => $tournament]);
    }

    public function editTeams(Request $request, $id){
        $this->validator($request->all())->validate();
        $tournament = $this->update($id, $request->all());
        return redirect('/tournament/' . $tournament->id);
    }

    protected function updateTeams($id, array $data)
    {
        $tournament = Tournament::find($id);
        $tournament->name = $team;
        $tournament->save();

        return $tournament;
    }

}
