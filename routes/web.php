<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PÁGINAS PRINCIPALES
|--------------------------------------------------------------------------
*/

Route::view('/', 'inicio')
    ->name('inicio');

Route::view('/proyectos', 'proyectos')
    ->name('proyectos');

Route::view('/quienes-somos', 'quienes')
    ->name('quienes');

Route::view('/contacto', 'contacto')
    ->name('contacto');

/*
|--------------------------------------------------------------------------
| DETALLE DE PROYECTOS
|--------------------------------------------------------------------------
*/

Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])
    ->whereNumber('id')
    ->name('proyectos.show');

/*
|--------------------------------------------------------------------------
| FORMULARIO DE CONTACTO
|--------------------------------------------------------------------------
*/

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->middleware('throttle:5,1')
    ->name('contacto.enviar');

/*
|--------------------------------------------------------------------------
| SITEMAP PARA GOOGLE
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', function () {

    $pages = [
        [
            'url' => route('inicio'),
            'priority' => '1.0',
            'changefreq' => 'weekly',
        ],
        [
            'url' => route('quienes'),
            'priority' => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('proyectos'),
            'priority' => '0.9',
            'changefreq' => 'weekly',
        ],
        [
            'url' => route('contacto'),
            'priority' => '0.7',
            'changefreq' => 'monthly',
        ],
    ];

    return response()
        ->view('sitemap', compact('pages'))
        ->header('Content-Type', 'application/xml');

})->name('sitemap');
