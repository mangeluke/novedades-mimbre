<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos a la vista si es necesario
        return view('productos'); // Asegúrate de crear la vista `productos.blade.php`
    }
    public function buscar(Request $request)
    {
        // Obtener el término de búsqueda del cliente
        $query = $request->input('query');

        // Buscar productos que coincidan con el término
        $productos = Producto::where('nombre', 'LIKE', "%$query%")
            ->orWhere('descripcion', 'LIKE', "%$query%")
            ->get();

        // Devolver los resultados como JSON
        return response()->json($productos);
    }
}
