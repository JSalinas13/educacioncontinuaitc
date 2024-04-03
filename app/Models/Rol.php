<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    protected $table = 'roles';
    use HasFactory;
    public function privilegioRol(): belongsToMany
    {
        return $this->belongsToMany(Privilegio::class,'privilegiosroles','rol_id','privilegio_id');
    }
    public function usuarioRol(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'usuariosroles', 'rol_id', 'usuario_id');
    }
}
