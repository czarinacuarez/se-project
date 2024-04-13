<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\MrAndMsNU;

class SpecialAwards extends Model
{
    use HasFactory;

    protected $table = 'special_awards';

    protected $fillable = [
        'contestant_id',
        'special_awards',
    ];
    public function contestant(): BelongsTo
    {
        return $this->belongsTo(MrAndMsNU::class);
    }
}
