<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    use HasFactory;

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }
    public function localidad() :HasMany
    {
        return $this->hasMany(Localidad::class);
    }
}
