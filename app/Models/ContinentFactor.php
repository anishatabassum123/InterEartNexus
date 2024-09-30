<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContinentFactor extends Model
{
    use HasFactory;
    protected $table = 'continent_factors';
    protected $fillable = ['continent_id', 'factor_id', 'descriptions', 'title', 'image', 'video_url'];

    public function continent(): BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }
    public function factor(): BelongsTo
    {
        return $this->belongsTo(Factor::class);
    }
}
