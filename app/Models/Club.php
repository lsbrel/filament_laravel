<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{

    protected $table = "club";

    protected $fillable = [
        'name',
        'foundation_year',
        'country',
    ];

    public function footballPlayers(): HasMany
    {
        return $this->hasMany(FootballPlayer::class);
    }
}
