<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoComentario extends Model
{
    protected $table = 'cursoscomentarios';
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'comentario_id');
    }
}
