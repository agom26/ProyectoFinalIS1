<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
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
    return view('welcome');
});

Auth::routes();
Route::resource('/users', UserController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Categorias
Route::get('/categorias',[CategoriaController::class,'index'])->name('categorias.index');
Route::get('/categorias/create',[CategoriaController::class,'create'])->name('categorias.create');
Route::post('/categorias/store',[CategoriaController::class,'store'])->name('categorias.store');
Route::get('/categorias/edit/{id}',[CategoriaController::class,'edit'])->name('categorias.edit');
Route::put('/categorias/update/{id}',[CategoriaController::class,'update'])->name('categorias.update');
Route::get('/categorias/show/{id}',[CategoriaController::class,'show'])->name('categorias.show');
Route::delete('/categorias/destroy/{id}',[CategoriaController::class,'destroy'])->name('categorias.destroy');

//Proveedores
Route::get('/proveedores',[ProveedorController::class,'index'])->name('proveedores.index');
Route::get('/proveedores/create',[ProveedorController::class,'create'])->name('proveedores.create');
Route::post('/proveedores/store',[ProveedorController::class,'store'])->name('proveedores.store');
Route::get('/proveedores/edit/{id}',[ProveedorController::class,'edit'])->name('proveedores.edit');
Route::put('/proveedores/update/{id}',[ProveedorController::class,'update'])->name('proveedores.update');
Route::get('/proveedores/show/{id}',[ProveedorController::class,'show'])->name('proveedores.show');
Route::delete('/proveedores/destroy/{id}',[ProveedorController::class,'destroy'])->name('proveedores.destroy');

//Clientes
Route::get('/clientes',[ClienteController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');
Route::post('/clientes/store',[ClienteController::class,'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}',[ClienteController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}',[ClienteController::class,'update'])->name('clientes.update');
Route::get('/clientes/show/{id}',[ClienteController::class,'show'])->name('clientes.show');
Route::delete('/clientes/destroy/{id}',[ClienteController::class,'destroy'])->name('clientes.destroy');