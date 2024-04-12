<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\School;

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

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
