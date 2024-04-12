<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\School;
use App\Models\Program;
use App\Models\Sports;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';

    protected $fillable = [
        'school_id',
        'sports_id',
        'program_id',
        'name',
        'profile',
        'section',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function sports(): BelongsTo
    {
        return $this->belongsTo(Sports::class);
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
