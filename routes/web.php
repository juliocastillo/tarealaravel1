<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/informe', function () {
    return view('informe');
});
*/

Route::get('/proyectos/crear', function () {
    return view('crear');
});

Route::get('/', [App\Http\Controllers\ProyectosController::class, 'index']);

Route::get('/proyectos/dataformulario', [App\Http\Controllers\ProyectosController::class, 'dataformulario'])->name('proyectos.formdata');

Route::get('/proyectos/eliminar/{id}', [App\Http\Controllers\ProyectosController::class, 'eliminar']);

Route::get('/proyectos/actualizar/{id}', [App\Http\Controllers\ProyectosController::class, 'actualizar']);

Route::get('/proyectos/actualizardataformulario/{id}', [App\Http\Controllers\ProyectosController::class, 'actualizardataformulario'])->name('proyectos.formactualizardata');

Route::get('/proyectos/informepdf/{id}', [App\Http\Controllers\ProyectosController::class, 'informepdf'])->name('proyectos.pdf');


