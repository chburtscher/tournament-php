<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function tournament()
    {
        return $this->belongsTo('App\Tournament', 'tournament_id', 'id');
    }
    public function game()
    {
        return $this->belongsToMany('App\Game');
    }
    protected $fillable = [
        'name', 'tournament_id',
    ];
}