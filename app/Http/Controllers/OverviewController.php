<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function showOverviewForm($id){
        $tournament = Tournament::find($id);
        return view('pages.overview', ['tournament' => $tournament]);
    }
}