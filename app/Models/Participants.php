<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;
    protected $table = 'participants';

    protected $fillable = [
        'school_id',
        'contest_id',
        'program_id',
        'name',
        'section'
    ];
}
