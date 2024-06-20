<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // se uso fillable para permitir la asignacionn a la base de datos
    protected $fillable = [
        'stockid',
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
        'costo',
        //'_token',
    ];
}
