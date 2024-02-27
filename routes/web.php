<?php

use App\Http\Controllers\Vuelos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsiento;

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

Route::get('/', function () {
    return view('inicio');
});
Route::get("/tipo-asiento", [TipoAsiento::class, "index"])->name("tipoAsiento");
Route::get("/agregar-tipo-asiento", [TipoAsiento::class, "agregarTipoAsiento"])->name("agregarTipoAsiento");
Route::post("/guardar-tipo-asiento", [TipoAsiento::class, "guardarTipoAsiento"])->name("guardarTipoAsiento");
Route::get("/editar-tipo-asiento/{id}", [TipoAsiento::class, "editarTipoAsiento"])->name("editarTipoAsiento");
Route::post("/actualizar-tipo-asiento/{id}", [TipoAsiento::class, "actualizarTipoAsiento"])->name("actualizarTipoAsiento");
Route::get("/eliminar-tipo-asiento/{id}", [TipoAsiento::class, "eliminarTipoAsiento"])->name("eliminarTipoAsiento");

Route::get("/vuelos", [Vuelos::class, "index"])->name("vuelos");
Route::get("/agregar-vuelo", [Vuelos::class, "agregarVuelo"])->name("agregarVuelo");
Route::post("/guardar-vuelo", [Vuelos::class, "guardarVuelo"])->name("guardarVuelo");
Route::get("/editar-vuelo/{id}", [Vuelos::class, "editarVuelo"])->name("editarVuelo");
Route::post("/actualizar-vuelo/{id}", [Vuelos::class, "actualizarVuelo"])->name("actualizarVuelo");
Route::get("/eliminar-vuelo/{id}", [Vuelos::class, "eliminarVuelo"])->name("eliminarVuelo");



