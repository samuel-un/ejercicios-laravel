<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/saludo', function () {
    $nombre = 'Miguel';
    return view('saludo', compact('nombre'));
});

Route::get('/condicional', function () {
    $usuarioAutenticado = true; // Cambia a false para simular un usuario no autenticado
    return view('condicional', compact('usuarioAutenticado'));
});

Route::get('/productos', function () {
    $productos = [
        ['nombre' => 'Pantalla', 'precio' => 1200],
        ['nombre' => 'Portatil', 'precio' => 800],
        ['nombre' => 'WiFi', 'precio' => 30]
    ];
    return view('productos', compact('productos'));
});


// Route::get('/productos', [ProductoController::class,'index']);
// Route::get('/productos/{id}', [ProductoController::class,'show']);

// Route::get('/usuarios', [UsuarioController::class,'index']);
// Route::get('/usuarios/{id}', [UsuarioController::class,'show']);

Route::get('/usuarios/create', [UsuarioController::class,'create']);
Route::post('/usuarios', [UsuarioController::class,'store']);

Route::get('/saludo/{nombre}', [UsuarioController::class, 'saludo']);