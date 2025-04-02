<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos a la vista si es necesario
        return view('productos'); // Asegúrate de crear la vista `productos.blade.php`
    }
}
