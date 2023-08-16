<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class Game extends Model
{
    use HasFactory;

    protected $guarded =[
        'id',
    ];

    public $timestamps = false;


    public  function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public  function team(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public  function kickoff(): BelongsTo
    {
        return $this->belongsTo(Kickoff::class);
    }

    public  function date(): BelongsTo
    {
        return $this->belongsTo(Date::class);
    }
}
