<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Club extends Model
{
    use HasFactory;

    protected $guarded =[
        'id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public  function team(): HasOne
    {
        return $this->hasOne(Team::class);
    }

    public  function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    public  function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }

    public  function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public  function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}

