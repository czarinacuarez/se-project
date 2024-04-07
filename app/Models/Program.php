<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'program';

    protected $fillable = [
        'school_id',
        'program_initials',
        'program_name',
        'points',
    ];
}
