<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'character_id',
        'stat_id',
        'value',
    ];
}
