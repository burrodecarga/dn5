<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{

    protected $fillable =
    [
'titulo'
,'descripcion'
,'concepto'
,'definicion'
,'posicion'
,'publicado'
,'autor'
,'actualizado',
'icon',
'imagen'
];

    use HasFactory;

    public function subtemas(){
        return $this->hasMany(Subtema::class);
    }
}
