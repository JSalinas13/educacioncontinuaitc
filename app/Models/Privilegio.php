<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Privilegio extends Model
{
    protected $table = 'privilegios';
    use HasFactory;
    public function privilegioRol(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'privilegiosroles', 'privilegio_id', 'rol_id');
    }
}
