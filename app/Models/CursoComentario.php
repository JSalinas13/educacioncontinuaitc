<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CursoComentario extends Model
{
    protected $table = 'cursoscomentarios';
    use HasFactory;

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function comentario(): BelongsTo
    {
        return $this->belongsTo(Comentario::class, 'comentario_id');
    }
}
