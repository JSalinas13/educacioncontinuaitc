<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comentario extends Model
{
    protected $table = 'comentarios';

    use HasFactory;
    public function cursoComentario(): HasMany
    {
        return $this->hasMany(CursoComentario::class, 'comentario_id');
    }
}
