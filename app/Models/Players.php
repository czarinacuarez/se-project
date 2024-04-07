<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';

    protected $fillable = [
        'school_id',
        'sports_id',
        'program_id',
        'name',
        'section'
    ];
}
