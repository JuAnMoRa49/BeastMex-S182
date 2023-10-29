<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastController;
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



// Ruta para login

Route::get('/', [beastController::class, 'metodoLogin'])->name('login');
Route::get('/perfil', [beastController::class, 'metodoPerfil'])->name('perfil');

// Rutas para productos

Route::get('/regi_prod', [beastController::class, 'metodoRegistroProducto'])->name('apodoRegistroProductos');
Route::get('/save_prod', [beastController::class, 'metodoGuardarProducto'])->name('apodoGuardarProductos');
Route::get('/cons_prod', [beastController::class, 'metodoConsultaProducto'])->name('apodoConsultaProductos');
Route::get('/cons_prod_espe', [beastController::class, 'metodoConsultaProductosEspecifico'])->name('apodoConsultaProductosEspecifico');
Route::get('/edit_prod', [beastController::class, 'metodoEditarProducto'])->name('apodoEditarProducto');
Route::get('/actu_prod', [beastController::class, 'metodoActualizarProducto'])->name('apodoActualizarProducto');

// Rutas para proveedores

Route::get('/regi_prov', [beastController::class, 'metodoRegistroProveedor'])->name('apodoRegistroProveedor');
Route::get('/save_prov', [beastController::class, 'metodoGuardarProveedor'])->name('apodoGuardarProveedor');
Route::get('/cons_prov', [beastController::class, 'metodoConsultaProveedor'])->name('apodoConsultaProveedor');
Route::get('/cons_prov_espe', [beastController::class, 'metodoConsultaProveedorEspecifico'])->name('apodoConsultaProveedorEspecifico');
Route::get('/edit_prov', [beastController::class, 'metodoEditarProveedor'])->name('apodoEditarProveedor');
Route::get('/actu_prov', [beastController::class, 'metodoActualizarProveedor'])->name('apodoActualizarProveedor');

// Rutas para usuarios

Route::get('/regi_usua', [beastController::class, 'metodoRegistroCliente'])->name('apodoRegistroCliente');
Route::get('/save_usua', [beastController::class, 'metodoGuardarCliente'])->name('apodoGuardarCliente');
Route::get('/cons_usua', [beastController::class, 'metodoConsultaCliente'])->name('apodoConsultaCliente');
Route::get('/cons_usua_espe', [beastController::class, 'metodoConsultaClienteEspecifico'])->name('apodoConsultaClienteEspecifico');
Route::get('/edit_usua', [beastController::class, 'metodoEditarCliente'])->name('apodoEditarCliente');
Route::get('/actu_usua', [beastController::class, 'metodoActualizarCliente'])->name('apodoActualizarCliente');

