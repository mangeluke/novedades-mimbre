<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function getOrCreateCarrito(Request $request)
    {
        // Obtener el ID del usuario autenticado
        $idCliente = auth()->id();

        if (!$idCliente) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }

        // Buscar un carrito existente para el cliente
        $carrito = DB::table('carrito')->where('id_cliente', $idCliente)->first();

        if ($carrito) {
            return response()->json($carrito);
        }

        // Crear un nuevo carrito si no existe
        $idCarrito = DB::table('carrito')->insertGetId([
            'id_cliente' => $idCliente,
            'fecha_creacion' => now(),
        ]);

        return response()->json(['id_carrito' => $idCarrito]);
    }

    public function agregarProductoAlCarrito(Request $request)
{
    try {
        $idCarrito = $request->input('idCarrito');
        $idProducto = $request->input('idProducto');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

        // Verificar si el producto ya está en el carrito
        $itemExistente = DB::table('carrito_items')
            ->where('id_carrito', $idCarrito)
            ->where('id_producto', $idProducto)
            ->first();

        if ($itemExistente) {
            // Actualizar la cantidad si el producto ya existe
            DB::table('carrito_items')
                ->where('id_carrito_item', $itemExistente->id_carrito_item)
                ->update([
                    'cantidad' => $itemExistente->cantidad + $cantidad,
                ]);
        } else {
            // Crear un nuevo registro si el producto no existe
            DB::table('carrito_items')->insert([
                'id_carrito' => $idCarrito,
                'id_producto' => $idProducto,
                'cantidad' => $cantidad,
                'precio' => $precio,
            ]);
        }

        return response()->json(['message' => 'Producto agregado al carrito'], 200);
    } catch (\Exception $e) {
        // Registrar el error en los logs
        \Log::error('Error al agregar producto al carrito: ' . $e->getMessage());

        // Devolver una respuesta de error
        return response()->json(['error' => 'No se pudo agregar el producto al carrito'], 500);
    }
}
}
/*
    public function eliminarProductoDelCarrito(Request $request)
    {
        $idCarritoItem = $request->input('idCarritoItem');

        DB::table('carrito_items')->where('id_carrito_item', $idCarritoItem)->delete();

        return response()->json(['message' => 'Producto eliminado del carrito']);
    }

    public function obtenerCarrito(Request $request)
    {
        $idCarrito = $request->input('idCarrito');

        $carritoItems = DB::table('carrito_items')
            ->where('id_carrito', $idCarrito)
            ->get();

        return response()->json($carritoItems);
    }
}*/