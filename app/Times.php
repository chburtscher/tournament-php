<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    public function contributors()
    {
        return $this->belongsToMany('App\User');
    }
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
    public function user()
    {
        return $this->belongsTo('App\Tournament', 'user_id', 'id');
    }
    public function games()
    {
        return $this->hasMany('App\game');
    }
    protected $fillable = [
        'startTime', 'timePerGame',
    ];
}