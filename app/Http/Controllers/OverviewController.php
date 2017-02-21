<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function showOverviewForm(){
        return view('pages.overwiev');
    }

    public function createOverview(Request $request, $id, $formOfSport){
        $this->validator($request->all())->validate();
        $tournament = $this->create($id, $formOfSport, $request->all());
        return redirect('/tournament/' . $tournament->$id . '/overview');
    }

    protected function create($id, $formOfSport)
    {
        $tournament = Tournament::find($id, $formOfSport);
        $tournament->save();

        return $tournament;
    }
}