<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\cuentaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ImagenesController;
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
Route::get('/', [JuegosController::class, 'show'])->name('home');

Route::get('/chat', function() {
    return view('chat');
});
Route::get('/soporte', function() {
    return view('soporte');
});

Route::get('/login',[LoginController::class, 'show'])->name('login');
Route::get('/registro',[RegisterController::class,'show']);
Route::post('/validar-registro',[RegisterController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/cuenta',[cuentaController::class,'show']);
Route::get('/cart',[compraController::class,'show']);
Route::delete('/cart/{item}', [compraController::class, 'destroy'])->name('carrito.destroy');
Route::post('/cart/agregar', [compraController::class, 'agregar'])->name('carrito.agregar');
Route::get('/inventario',[inventarioController::class,'show']);
Route::post('/compra-hecha',[inventarioController::class,'comprar'])->name('compra.hecha');

Route::get('/dev',[CrudController::class, 'index'])->name('crud');
Route::get('/dev/index', [JuegosController::class, 'index'])->name('index');

Route::post('/subir-imagen', [ImagenesController::class, 'subir'])->name('imagen.subir');
Route::post('/juegos/guardar', [JuegosController::class, 'guardar'])->name('juegos.guardar');
Route::post('/dev/delete/{juego}', [JuegosController::class, 'eliminar'])->name('juegos.eliminar');
Route::get('/dev/edit/{juego}', [JuegosController::class, 'editar'])->name('juegos.editar');
Route::post('/dev/edit/complete/{id}/', [JuegosController::class, 'actualizar'])->name('juegos.actualizar');
