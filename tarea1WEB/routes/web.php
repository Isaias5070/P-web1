<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
