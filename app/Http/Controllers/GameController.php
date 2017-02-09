<?php

namespace App\Http\Controllers;


use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function showGameForm(){
        return view('pages.results');
    }
    public function createGame(Request $request){
        $this->validator($request->all())->validate();
        $this->create($request->all());
    }
    protected function validator(array $data)
    {
        return Validator::make($data,[
            // to-do: implement rules
        ]);
    }
    protected function create(array $data)
    {
        return Game::create([
            //Eingabefelder einfügen
        ]);
    }
}