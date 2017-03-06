<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * @property int $round
 * @property int $field
 * @property Team $team1
 * @property int $team1_id
 * @property Team $team2
 * @property int $team2_id
 * @property Team $referee
 * @property int $referee_id
 */
class Game extends Model
{
    public function team1()
    {
        return $this->belongsTo(Team::class);
    }

    public function team2()
    {
        return $this->belongsTo(Team::class);
    }

    public function referee()
    {
        return $this->belongsTo(Team::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}