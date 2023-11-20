<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    protected $fillable = [
      'user_id',
      'name',
      'age',
      'race',
      'sub_race',
      'level',
      'current_exp',
      'exp_to_level',
      'class',
      'avatar',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];
}
