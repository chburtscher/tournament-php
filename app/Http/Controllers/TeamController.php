<?php

namespace App\Http\Controllers;


use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function showTeamsForm($id){
        return view('pages.teams');
    }

    public function createTeams(Request $request, $id){
        $this->validator($request->all())->validate();
        $this->create($id, $request->all());
        return redirect('/tournament/' . $tournament->id . '/review');
    }

    protected function validator(array $data)
    {
        return Validator::make($data,[
            //to-do: implement-rules
        ]);
    }

    protected function create($id, array $data)
    {
        $turnier = Tournament::find($id, 'numberOfTeams');
        $turnier->team = $data['name'];
        $turnier->save();

        return view('pages.teams', ['numberOfTeams' => $turnier -> count]);
    }
}