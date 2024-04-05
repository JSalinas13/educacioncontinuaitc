<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    protected $table = 'cursos';
    use HasFactory;
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
    public function tipoCurso(): BelongsTo
    {
        return $this->belongsTo(TipoCurso::class);
    }
    public function cursoEstudiante(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'cursosestudiantes', 'curso_id', 'estudiante_id');
    }
    public function programas():HasMany
    {
        return $this->hasMany(Programa::class);
    }
    public function cursoComentario(): HasMany
    {
        return $this->hasMany(CursoComentario::class, 'curso_id');
    }
}
