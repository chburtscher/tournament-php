<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int numberOfTeams
 * @property int $numberOfFields
 * @property int? $numberOfGroups
 * @property Team[] $teams
 * @property string $name
 * @property int $id
 * @property int $timePerGame
 * @property \DateTime $startTime
 */
class Tournament extends Model
{
    protected $fillable = [
        'name',
        'mode',
        'playMode',
        'numberOfGroups',
        'numberOfTeams',
        'numberOfFields',
        'formOfSport',
        'timePerGame',
        'startTime',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function contributors()
    {
        return $this->belongsToMany(User::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
