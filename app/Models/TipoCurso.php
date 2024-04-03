<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoCurso extends Model
{
    protected $table = 'tiposcursos'; // Especifica el nombre de la tabla

    use HasFactory;

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
    public function curso(): HasMany
    {
        return $this->hasMany(Curso::class);
    }
}
