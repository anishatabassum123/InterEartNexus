<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code',];

    public function factors()
    {
        return $this->hasMany(ContinentFactor::class);
    }
}
