<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function showOverviewForm(){
        return view('pages.overwiev');
    }

    public function createOverview(Request $request, $id){
        $this->validator($request->all())->validate();
        $tournament = $this->create($id, $request->all());
        return redirect('/tournament/' . $tournament->$id . '/overview');
    }
}