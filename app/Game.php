<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function team1()
    {
        return $this->belongsToMany('App\Team');
    }
    public function team2()
    {
        return $this->belongsToMany('App\Team');
    }
    public function referee()
    {
        return $this->belongsToMany('App\Team');
    }

    public function tournament()
    {
        return $this->belongsTo('App\Tournament', 'tournament_id', 'id');
    }
}