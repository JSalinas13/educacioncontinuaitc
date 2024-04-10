<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contacto extends Model
{
    protected $table = 'contactos';
    use HasFactory;
    public function contactoUsuario(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'contactosusuarios', 'contacto_id', 'usuario_id');
    }
}
