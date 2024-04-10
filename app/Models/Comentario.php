<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comentario extends Model
{
    protected $table = 'comentarios';

    use HasFactory;
    public function cursoComentario(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'cursoscomentarios', 'comentario_id', 'curso_id');
    }

    public function usuario(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'contactos', 'comentario_id', 'usuario_id');
    }
}
