<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\CategorysController;

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

//listar Proveedor
Route::get('proveedores', [ProvidersController::class, 'index'])->name('proveedores');
//Crear Proveedor
Route::get('proveedores/crear', [ProvidersController::class, 'create'])->name('proveedores.crear');
//Guardar Proveedor
Route::post('proveedores', [ProvidersController::class, 'store'])->name('proveedores.guardar');
//Eliminar Proveedor
Route::delete('proveedores/{id}', [ProvidersController::class, 'destroy'])->name('proveedores.eliminar');
//Detalles Proveedor
Route::get('proveedores/{id}', [ProvidersController::class, 'show'])->name('proveedores.detalles');
//Editar Proveedor
Route::get('proveedores/{id}/editar', [ProvidersController::class, 'edit'])->name('proveedores.editar');
//Actualizar Proveedor
Route::put('proveedores/{id}', [ProvidersController::class, 'update'])->name('proveedores.actualizar');


//listar categoria
Route::get('categorias', [categorysController::class, 'index'])->name('categorias');
//Crear categoria
Route::get('categorias/crear', [categoryesController::class, 'create'])->name('categorias.crear');
//Guardar categoria
Route::post('categorias', [categorysController::class, 'store'])->name('categorias.guardar');
//Eliminar categoria
Route::delete('categorias/{id}', [categorysController::class, 'destroy'])->name('categorias.eliminar');
//Detalles categoria
Route::get('categorias/{id}', [categorysController::class, 'show'])->name('categorias.detalles');
//Editar categoria
Route::get('categorias/{id}/editar', [categorysController::class, 'edit'])->name('categorias.editar');
//Actualizar categoria
Route::put('categorias/{id}', [categorysController::class, 'update'])->name('categorias.actualizar');
