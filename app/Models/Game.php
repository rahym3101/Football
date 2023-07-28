<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
