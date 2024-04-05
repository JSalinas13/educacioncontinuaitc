<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $table = 'usuarios';
    use HasFactory;
    public function usuarioRol(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'usuariosroles', 'usuario_id', 'rol_id');
    }
    public function contactoUsuario(): BelongsToMany
    {
        return $this->belongsToMany(Contacto::class, 'contactosusuarios', 'usuario_id', 'contacto_id');
    }
    public function localidad(): BelongsTo
    {
        return $this->belongsTo(Localidad::class);
    }
    public function curso(): HasMany
    {
        return $this->hasMany(Curso::class);
    }
    public function cursoEstudiante(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'cursosestudiantes', 'estudiante_id', 'curso_id');
    }
    public function cursoComentario(): HasMany
    {
        return $this->hasMany(CursoComentario::class, 'usuario_id');
    }
}
