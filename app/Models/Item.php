<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'subtema_id',
        'titulo', 'descripcion', 'posicion', 'publico', 'autor', 'actualizado',
        'icon',
    ];

    public function subtema(){
        return $this->belongsTo(Subtema::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
