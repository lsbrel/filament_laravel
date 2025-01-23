<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FootballPlayer extends Model
{

    protected $table = "football_player";

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}
