<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Nombre de la tabla
    protected $primaryKey = 'id_producto'; // Clave primaria
    public $timestamps = false; // Desactivar timestamps si no los usas

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'id_categoria',
        'id_proveedor',
        'fecha_agregado'
    ];
}
