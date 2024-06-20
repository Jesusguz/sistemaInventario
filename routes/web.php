<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas para las vistas y peticiones a los controladores


| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'welcome')->name('home'); // Ruta de bienvenida
Route::resource('productos', ProductoController::class); // Ruta de productos y metodos
Route::resource('movimientos', MovimientoController::class);// Ruta de movimientos y metodos

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('home'); // Nueva ruta
