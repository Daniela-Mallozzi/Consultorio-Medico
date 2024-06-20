<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Ruta de inicio
Route::get('/', [IndexController::class, 'index'])->name('index');

// Otras rutas estáticas
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
use App\Http\Controllers\RegistroController;

Route::get('/registro', [RegistroController::class, 'mostrarFormularioRegistro'])->name('registro');



require __DIR__.'/auth.php';
