<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contest;
use App\Models\Program;

class ContestAwards extends Model
{
    use HasFactory;

    protected $table = 'contest_awards';

    protected $fillable = [
        'contest_id',
        'program_id',
        'championship',
    ];
    public function contest(): BelongsTo
    {
        return $this->belongsTo(Contest::class);
    }
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
