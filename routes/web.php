<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(PracticaController::class)->group(function() {
    Route::get('practicas', 'index')->name('practicas.index');
    Route::get('practicas/create', 'create')->name('practicas.create');

    // Ruta para guardar lo enviado por formulario
    Route::post('practicas', 'store')->name('practicas.store');

    Route::get('practicas/{practica}', 'show')->name('practicas.show');
    Route::get('practicas/{practica}/edit', 'edit')->name('practicas.edit');
    Route::put('practicas/{practica}', 'update')->name('practicas.update');
});