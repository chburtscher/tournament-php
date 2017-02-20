<?php

namespace App\Http\Controllers;


use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TournamentController extends Controller
{
    public function showCreationForm(){
        $tournament = new Tournament();
        return view('pages.entries', ['tournament' => $tournament]);
    }
    public function createTournament(Request $request){
        $this->validator($request->all())->validate();
        $tournament = $this->create($request->all());
        return redirect('/tournament/' . $tournament->id . '/time');
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
    public function showEditForm($id) {
        $tournament = Tournament::find($id);
        return view('pages.entries', [ 'tournament' => $tournament ]);
    }

    public function editTournament(Request $request, $id){
        $this->validator($request->all())->validate();
        $tournament = $this->update($id, $request->all());
        return redirect('/tournament/' . $tournament->id);
    }

    protected function update($id, array $data)
    {
        $tournament = Tournament::find($id);
        $tournament->name = $data['name'];
        $tournament->name = $data['mode'];
        $tournament->name = $data['playMode'];
        $tournament->name = $data['numberOfGroups'];
        $tournament->name = $data['numberOfTeams'];
        $tournament->name = $data['numberOfFields'];
        $tournament->formOfSport = $data['formOfSport'];
        $tournament->save();

        return $tournament;
    }
}