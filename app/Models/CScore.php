<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ContestMatch;
use App\Models\Program;

class CScore extends Model
{
    use HasFactory;
    protected $table = 'cmatch_score';
    
    protected $fillable = [
        'scores',
        'cmatch_id',
        'program_id',
    ];
    public function ContestMatch(): BelongsTo
    {
        return $this->belongsTo(ContestMatch::class);
    }
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class, 'contest_id');
    }
}
