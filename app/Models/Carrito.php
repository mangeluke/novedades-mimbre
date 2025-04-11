<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito'; // Nombre de la tabla
    protected $primaryKey = 'id_carrito'; // Clave primaria
    public $timestamps = false; // Desactivar timestamps si no usas `created_at` y `updated_at`

    // Relación con CarritoItem
    public function items()
    {
        return $this->hasMany(CarritoItem::class, 'id_carrito', 'id_carrito');
    }
}
