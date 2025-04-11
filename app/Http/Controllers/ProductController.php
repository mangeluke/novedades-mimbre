<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Canasta chica',
                'image' => asset('images/imagen1.jpg'),
                'price' => 4.60,
                'description' => 'Una canasta pequeña hecha de mimbre natural.',
            ],
            [
                'id' => 2,
                'name' => 'Canasta mediana',
                'image' => asset('images/imagen2.jpg'),
                'price' => 5.30,
                'description' => 'Una canasta mediana ideal para almacenamiento.',
            ],
            [
                'id' => 3,
                'name' => 'Canasta grande',
                'image' => asset('images/imagen4.jpg'),
                'price' => 6.00,
                'description' => 'Una canasta grande para uso decorativo.',
            ],
            [
                'id' => 4,
                'name' => 'Canasta diferente',
                'image' => asset('images/imagen5.jpg'),
                'price' => 7.10,
                'description' => 'Una canasta grande para uso elegante.',
            ],
            [
                'id' => 5,
                'name' => 'Canasta diferente',
                'image' => asset('images/imagen1.jpg'),
                'price' => 7.10,
                'description' => 'Una canasta grande para uso elegante.',
            ],
            [
                'id' => 6,
                'name' => 'Canasta diferente',
                'image' => asset('images/imagen2.jpg'),
                'price' => 7.10,
                'description' => 'Una canasta grande para uso elegante.',
            ],
            [
                'id' => 7,
                'name' => 'Canasta diferente',
                'image' => asset('images/imagen4.jpg'),
                'price' => 7.10,
                'description' => 'Una canasta grande para uso elegante.',
            ],
            [
                'id' => 8,
                'name' => 'Canasta diferente',
                'image' => asset('images/imagen2.jpg'),
                'price' => 7.10,
                'description' => 'Una canasta grande para uso elegante.',
            ],
        ];

        return view('productos', compact('products'));
    }
}
