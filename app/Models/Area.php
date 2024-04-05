<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    protected $table = 'areas';

    use HasFactory;
    public function tipoCursos():HasMany
    {
        return $this->hasMany(TipoCurso::class);
    }
}
