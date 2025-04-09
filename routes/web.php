<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ContactoController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('posts', 'posts')
    ->middleware(['auth', 'verified'])
    ->name('posts');
    
Route::view('contacto', 'contacto')
    ->middleware(['auth', 'verified'])
    ->name('contacto');

    Route::view('blog', 'blog')
    ->middleware(['auth', 'verified'])
    ->name('blog');
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/contactos', function () {
    return view('contactos'); // Asegúrate de tener una vista llamada 'contactos.blade.php'
})->name('contactos');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos');

// Ruta para manejar el envío del formulario
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');

require __DIR__.'/auth.php';
