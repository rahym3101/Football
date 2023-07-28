<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
