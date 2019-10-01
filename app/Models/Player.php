<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';
    protected $primaryKey = "player_id";
    protected $guarded = ["player_id"];

    public function teams()
    {
        return $this->belongsToMany(Team::class, "player_team", "player_id", "team_id");

    }
}
