<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolAdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogoProductosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PerfilUsuarioController;
use App\Http\Controllers\PagoController;


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


/* Rutas iniciales para el cliente */

Route::get('/', function () {
    return view('catalogo.index');
});

Route::resource('Catalogo-Productos', CatalogoProductosController::class);

Route::get('/Soporte', function () {
    return view('catalogo.soporte');
});

Route::get('/Carrito', function () {
    return view('carrito.index');
});

Route::get('/Terminos-servicio', function () {
    return view('politica.terminos');
});

Route::get('/Politica-privacidad', function () {
    return view('politica.politica');
});

Route::get('/Politica-reembolso', function () {
    return view('politica.reembolsos');
});

// Route::resource('Ventas', VentaController::class);

Route::resource('Pago', PagoController::class);

/* Rutas carrito */

Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart-checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::post('/cart-clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/cart-removeitem', [CartController::class, 'removeitem'])->name('cart.removeitem');

// 
// 

/* Rutas para el Administrador */


/* Rutas del menu del Administrador */

Route::resource('menuAdmin', MenuAdminController::class)->middleware('auth');


Route::resource('perfilUsu', PerfilUsuarioController::class)->middleware('auth');


/* Rutas de Productos */

Route::resource('producto', ProductoController::class)->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes(['reset'=>false]);


/* Autenticacion */

Route::get('/CrearProductos', [ProductoController::class, 'index'])->name('CrearProductos');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/CrearProductos', [ProductoController::class, 'index'])->name('CrearProductos');
});

Route::resource('users', UsersController::class);
