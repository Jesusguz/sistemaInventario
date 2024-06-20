<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    // se uso fillable para permitir la asignacionn a la base de datos
    protected $fillable = [
        'producto_id',
        'tipo',
        'cantidad',
        'fecha',
        'costo',
        'precio',
    ];
    //Relacion de modelo con producto
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
