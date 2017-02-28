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
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
    public function user()
    {
        return $this->belongsTo('App\Tournament', 'user_id', 'id');
    }
    public function contributors()
    {
        return $this->belongsToMany('App\User');
    }
    public function games()
    {
        return $this->hasMany('App\game');
    }
    protected $fillable = [
        'name', 'mode', 'playMode', 'numberOfGroups', 'numberOfTeams', 'numberOfFields', 'formOfSport',
    ];
}
