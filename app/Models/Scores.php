<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SportsMatch;
use App\Models\School;

class Scores extends Model
{
    use HasFactory;

    protected $table = 'scores';

    protected $fillable = [
        'match_id',
        'school_id',
        'scores',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
    public function SportMatch(): BelongsTo
    {
        return $this->belongsTo(SportsMatch::class);
    }
}

