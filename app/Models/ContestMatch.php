<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contest;
use App\Models\CScore;

class ContestMatch extends Model
{
    use HasFactory;
    protected $table = 'contest_match';
    protected $dates = ['date'];

    protected $fillable = [
        'match_name',
        'date',
        'location',
        'contest_id',
    ];

    public function contest(): BelongsTo
    {
        return $this->belongsTo(Contest::class);
    }


    public function cmatch_score()
    {
        return $this->hasMany(CScore::class, 'cmatch_id');
    }

    public function program()
    {
        return $this->hasManyThrough(Program::class, CScore::class, 'cmatch_id', 'id', 'id', 'program_id');
    }

    

}
