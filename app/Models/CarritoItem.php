<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    protected $table = 'carrito_items'; // Nombre de la tabla
    protected $primaryKey = 'id_carrito_item'; // Clave primaria
    public $timestamps = false; // Desactivar timestamps

    // Relación con Carrito
    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito', 'id_carrito');
    }

    // Relación con Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id');
    }
}
