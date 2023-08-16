<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Kickoff extends Model
{
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;

    public function game(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
