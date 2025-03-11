<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/saludo', function () {
    $nombre = 'Miguel';
    return view('saludo', compact('nombre'));
});

Route::get('/condicional', function () {
    $usuarioAutenticado = true;
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

Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios', [UsuarioController::class, 'store']);

Route::get('/saludo/{nombre}', [UsuarioController::class, 'saludo']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/users/{id}/posts', [PostController::class, 'getUserPosts']);

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


// Route::get('/productos', [ProductoController::class,'index']);
// Route::get('/productos/{id}', [ProductoController::class,'show']);

// Route::get('/usuarios', [UsuarioController::class,'index']);
// Route::get('/usuarios/{id}', [UsuarioController::class,'show']);

Route::get('/registro', function () {
    return view('registro');
});

Route::post('/register', [RegistroController::class, 'store'])->name('register');