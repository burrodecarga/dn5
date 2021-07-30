<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtema extends Model
{

    use HasFactory;

    protected $fillable =
    [
'tema_id',
'titulo'
,'descripcion'
,'posicion'
,'publico'
,'autor'
,'actualizado',
'icon',
'imagen'
];

    public function tema(){
        return $this->belongsTo(Tema::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
