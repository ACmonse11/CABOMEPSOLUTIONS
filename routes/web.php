<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio');
Route::view('/proyectos', 'proyectos');
Route::view('/quienes-somos', 'quienes');
Route::view('/contacto', 'contacto');

Route::post('/contacto', [ContactoController::class, 'enviar']);
