<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    public $timestamps = false;
    protected $table = 'estados';
    use HasFactory;
    public function ciudades(): HasMany
    {
        return $this->hasMany(Ciudad::class);
    }
}
