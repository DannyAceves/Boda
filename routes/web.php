<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('J&M');
});

Route::get('asistencia', [InvitadoController::class, 'mostrarFormularioAsistencia'])
    ->middleware('guest')
    ->name('asistencia');

Route::post('asistencia', [InvitadoController::class, 'enviarCorreo'])->name('enviarCorreo');

Route::get('asistencia/id/{idSeleccionado}', 'InvitadoContoller@obtenerBoletosDisponibles');




