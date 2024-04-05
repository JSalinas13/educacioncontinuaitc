<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';
    use HasFactory;
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }
}
