<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\School;
use App\Models\Sports;

class SportsAwards extends Model
{
    use HasFactory;
    protected $table = 'sports_awards';

    protected $fillable = [
        'school_id',
        'sports_id',
        'championship',
    ];

    public function sports(): BelongsTo
    {
        return $this->belongsTo(Sports::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
