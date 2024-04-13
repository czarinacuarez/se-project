<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';

    protected $fillable = [
        'school_initials',
        'school_name',
        'school_logo',
        'points',
    ];
}
