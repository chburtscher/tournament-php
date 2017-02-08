<?php

namespace App\Http\Controllers;


use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TimesController extends Controller
{
    public function showTimesForm(){
        return view('pages.zeit');
    }
    public function createTimes(Request $request, $id){
        $this->validator($request->all())->validate();
        $this->create($id, $request->all());
        return redirect('/mannschaften');
    }
    protected function validator(array $data)
    {
        return Validator::make($data,[
            //to-do: implement rules
        ]);
    }
    protected function create($id, array $data)
    {
        $turnier = Tournament::find($id);
        $turnier->startTime = $data['startTime'];
        $turnier->timePerGame = $data['timePerGame'];
        $turnier->save();

        return $turnier;
    }
}