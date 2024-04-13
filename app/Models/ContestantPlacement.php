<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\MrAndMsNU;

class ContestantPlacement extends Model
{
    use HasFactory;

    protected $table = 'contestant_placement';

    protected $fillable = [
        'contestant_id',
        'placement',
    ];
    public function contestant(): BelongsTo
    {
        return $this->belongsTo(MrAndMsNU::class);
    }
}
