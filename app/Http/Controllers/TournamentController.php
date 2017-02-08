<?php

namespace App\Http\Controllers;


use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TournamentController extends Controller
{
    public function showCreationForm(){
        return view('pages.eingaben');
    }
    public function createTournament(Request $request){
        $this->validator($request->all())->validate();
        $tournament = $this->create($request->all());
        return redirect('/tournament/' . $tournament->id . '/zeit');
    }
    protected function validator(array $data)
    {
        return Validator::make($data,[
            //to-do: implement rules
        ]);
    }
    protected function create(array $data)
    {
        return Tournament::create([
            'name' => $data['name'],
            'mode' => $data['mode'],
            'playMode' => $data['playMode'],
            'numberOfGroups' => $data['numberOfGroups'],
            'numberOfTeams' => $data['numberOfTeams'],
            'numberOfFields' => $data['numberOfFields'],
            'formOfSport' => $data['formOfSport'],
        ]);
    }
}