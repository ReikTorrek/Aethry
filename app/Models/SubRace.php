<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRace extends Model
{
    use HasFactory;

    protected $table = 'sub_races';
    protected $fillable = [
        'race_id',
        'value',
    ];
}
