<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = "team_id";
    protected $guarded = ['team_id'];

    public function players()
    {
        return $this->belongsToMany(Player::class, "player_team", "team_id", "player_id");
    }
}
