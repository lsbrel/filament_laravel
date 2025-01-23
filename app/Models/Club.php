<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{

    protected $table = "club";

    public function footballPlayer(): HasMany
    {
        return $this->hasMany(FootballPlayer::class);
    }
}
