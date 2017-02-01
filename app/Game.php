<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function team()
    {
        return $this->belongsToMany('App\team');
    }

    public function tournament()
    {
        return $this->belongsTo('App\Tournament', 'tournament_id', 'id');
    }
}