<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
}
