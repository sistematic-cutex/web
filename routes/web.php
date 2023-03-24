<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\CompanyController;

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

//listar compañia
Route::get('compañias', [CompanyController::class, 'index'])->name('compañias');
//Crear compañia
Route::get('compañias/crear', [CompanyController::class, 'create'])->name('compañias.crear');
//Guardar Compañia
Route::post('compañias', [CompanyController::class, 'store'])->name('compañias.guardar');
//Eliminar compañia
Route::delete('compañias/{id}', [CompanyController::class, 'destroy'])->name('compañias.eliminar');
//Detalles compañia 
Route::get('compañias/{id}', [CompanyController::class, 'show'])->name('compañias.detalles');
//Editar provedor 
Route::get('compañias/{id}', [CompanyController::class, 'edit'])->name('compañias.edit');
//Actualizar compañia
Route::put('compañias/{id}', [CompanyController::class, 'update'])->name('comapñias.actualizar');