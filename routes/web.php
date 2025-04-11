<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CarritoController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
Route::view('contacto', 'contacto')
    ->middleware(['auth', 'verified'])
    ->name('contacto');

Route::view('blog', 'blog')
    ->middleware(['auth', 'verified'])
    ->name('blog');

Route::view('productos', 'productos')
    ->middleware(['auth', 'verified'])
    ->name('productos');
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/contactos', function () {
    return view('contactos'); // Asegúrate de tener una vista llamada 'contactos.blade.php'
})->name('contactos');


// Ruta para manejar el envío del formulario
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');


Route::get('/buscar-productos', [ProductController::class, 'buscar'])->name('productos.buscar');

Route::middleware(['auth'])->group(function () {
    // Rutas relacionadas con el carrito
    Route::post('/carrito/crear-o-recuperar', [CarritoController::class, 'getOrCreateCarrito'])->name('carrito.crear-o-recuperar');
    Route::post('/carrito/agregar-producto', [CarritoController::class, 'agregarProductoAlCarrito'])->name('carrito.agregar-producto');
});
Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::middleware(['auth'])->group(function () {
    Route::post('/carrito/crear-o-recuperar', [CarritoController::class, 'getOrCreateCarrito'])
        ->name('carrito.crear-o-recuperar');

    Route::post('/carrito/agregar-producto', [CarritoController::class, 'agregarProductoAlCarrito'])
        ->name('carrito.agregar-producto');
});
require __DIR__.'/auth.php';
