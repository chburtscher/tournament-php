<?php

namespace App\Http\Controllers;


use App\Times;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;

class TimesController extends Controller
{
    public function showTimesForm(){
        return view('pages.zeit');
    }
    public function createTimes(Request $request){
        $this->validator($request->all())->validate();
        $this->create($request->all());
        Route::get('/tournament/{$id}', function ($id) {
            return '/tournament'. $id;
        });
        return redirect('/mannschaften');
    }
    protected function validator(array $data)
    {
        return Validator::make($data,[
            //to-do: implement rules
        ]);
    }
    protected function create(array $data)
    {
        return Times::create([
            'startTime' => $data['startTime'],
            'timePerGame' => $data['timePerGame']
        ]);
    }
}