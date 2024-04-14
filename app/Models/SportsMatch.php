<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Sports;

class SportsMatch extends Model
{
    use HasFactory;

    protected $table = 'sports_match';
    protected $dates = ['date'];
    
    protected $fillable = [
        'match_name',
        'date',
        'location',
        'sports_id',
    ];

    public function sports(): BelongsTo
    {
        return $this->belongsTo(Sports::class);
    }

    public function scores()
    {
        return $this->hasMany(Scores::class, 'match_id');
    }

    public function schools()
    {
        return $this->hasManyThrough(School::class, Scores::class, 'match_id', 'id', 'id', 'school_id');
    }
}
