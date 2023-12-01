<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Academica\Facultades;
use App\Http\Controllers\Academica\Programas;
use App\Http\Controllers\Academica\Profesores;
use App\Http\Controllers\Academica\Estudiantes;
use App\Http\Controllers\Academica\Calificaciones;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'index']);

//Rutas Facultades
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listado_facultades');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro'])->name('form_registro_fac');
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class,'eliminar'])->name('eliminar_fac');
Route::get('/facultades/editar/{id}', [Facultades::class,'form_edicion'])->name('editar_fac');
Route::post('/facultades/editar/{id}', [Facultades::class,'editar'])->name('editar_facu');

//Rutas Programas
Route::get('/programas/listado', [Programas::class, 'index'])->name('listado_programas');
Route::get('/programas/registrar', [Programas::class, 'form_registro'])->name('form_registro_pro');
Route::post('/programas/registrar', [Programas::class, 'registrar']);

//Rutas Profesores
Route::get('/profesores/listado', [Profesores::class, 'index']);

//Rutas Estudiantes
Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);

//Rutas Calificaciones
Route::get('/calificaciones/listado', [Calificaciones::class, 'index']);



