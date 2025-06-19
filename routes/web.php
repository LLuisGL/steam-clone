<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\cuentaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\inventarioController;
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
Route::get('/', [JuegosController::class, 'index'])->name('home');

Route::get('/chat', function() {
    return view('chat');
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
