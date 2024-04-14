<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contest;
use App\Models\Program;

class Participants extends Model
{
    use HasFactory;
    protected $table = 'participants';

    protected $fillable = [
        'school_id',
        'contest_id',
        'program_id',
        'name',
        'profile',
        'section',
    ];

    public function Contest(): BelongsTo
    {
        return $this->belongsTo(Contest::class);
    }
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class, 'program_id'); 
    }
}
