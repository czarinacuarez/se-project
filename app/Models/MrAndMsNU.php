<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Program;

class MrAndMsNU extends Model
{
    use HasFactory;
    protected $table = 'contestant';

    protected $fillable = [
        'name',
        'section',
        'awards',
        'profile',
        'program_id'
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
