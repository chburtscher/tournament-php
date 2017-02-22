<?php

namespace App\Http\Controllers;


use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TimesController extends Controller
{
    public function showTimesForm($id){

        $tournament = Tournament::find($id);
        return view('pages.time', ['tournament' => $tournament]);
    }

    public function createTimes(Request $request, $id){
        $this->validator($request->all())->validate();
        $tournament = $this->create($id, $request->all());
        return redirect('/tournament/' . $tournament->id . '/teams');
    }

    protected function validator(array $data)
    {
        return Validator::make($data,[
            //to-do: implement rules
        ]);
    }

    protected function create($id, array $data)
    {
        $tournament = Tournament::find($id);
        $tournament->startTime = $data['startTime'];
        $tournament->timePerGame = $data['timePerGame'];
        $tournament->save();

        return $tournament;
    }
}