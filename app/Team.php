<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property Tournament $tournament
 * @property int $tournament_id
 */
class Team extends Model
{
    protected $fillable = [
        'name',
        'tournament_id',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}