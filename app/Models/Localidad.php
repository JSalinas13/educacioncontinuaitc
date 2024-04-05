<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Localidad extends Model
{
    protected $table = 'localidades';
    use HasFactory;
    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Ciudad::class);
    }
    public function usuario():HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}
