<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function Club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}