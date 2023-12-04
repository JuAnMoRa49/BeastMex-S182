<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastController;
use App\Http\Controllers\ProductoController;

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
Route::post('/save_prod', [beastController::class, 'metodoGuardarProducto'])->name('apodoGuardarProductos');
Route::get('/cons_prod', [beastController::class, 'metodoConsultaProducto'])->name('apodoConsultaProductos');
Route::get('/cons_prod_espe', [beastController::class, 'metodoConsultaProductosEspecifico'])->name('apodoConsultaProductosEspecifico');
Route::get('/edit_prod', [beastController::class, 'metodoEditarProducto'])->name('apodoEditarProducto');
Route::get('/actu_prod', [beastController::class, 'metodoActualizarProducto'])->name('apodoActualizarProducto');

// Rutas para proveedores
Route::get('/regi_prov', [beastController::class, 'metodoRegistroProveedor'])->name('apodoRegistroProveedor');
Route::post('/save_prov', [beastController::class, 'metodoGuardarProveedor'])->name('apodoGuardarProveedor');
Route::get('/cons_prov', [beastController::class, 'metodoConsultaProveedor'])->name('apodoConsultaProveedor');
Route::get('/cons_prov_espe', [beastController::class, 'metodoConsultaProveedorEspecifico'])->name('apodoConsultaProveedorEspecifico');
Route::get('/edit_prov', [beastController::class, 'metodoEditarProveedor'])->name('apodoEditarProveedor');
Route::get('/actu_prov', [beastController::class, 'metodoActualizarProveedor'])->name('apodoActualizarProveedor');

// Rutas para usuarios
Route::get('/regi_usua', [beastController::class, 'metodoRegistroUsuario'])->name('apodoRegistroUsuario');
Route::post('/save_usua', [beastController::class, 'metodoGuardarUsuario'])->name('apodoGuardarUsuario');
Route::get('/cons_usua', [beastController::class, 'metodoConsultaUsuario'])->name('apodoConsultaUsuario');
Route::get('/cons_usua_espe', [beastController::class, 'metodoConsultaUsuarioEspecifico'])->name('apodoConsultaUsuarioEspecifico');
Route::get('/edit_usua', [beastController::class, 'metodoEditarUsuario'])->name('apodoEditarUsuario');
Route::get('/actu_usua', [beastController::class, 'metodoActualizarUsuario'])->name('apodoActualizarUsuario');
Route::get('/elim_usua', [beastController::class, 'metodoEliminarUsuario'])->name('apodoEliminarUsuario');

// Rutas para compras
Route::get('/regi_comp', [beastController::class, 'metodoRegistroCompra'])->name('apodoRegistroCompra');
Route::post('/save_comp', [beastController::class, 'metodoGuardarCompra'])->name('apodoGuardarCompra');
Route::get('/cons_comp', [beastController::class, 'metodoConsultaCompra'])->name('apodoConsultaCompra');
Route::get('/cons_comp_espe', [beastController::class, 'metodoConsultaCompraEspecifico'])->name('apodoConsultaCompraEspecifico');
Route::get('/edit_comp', [beastController::class, 'metodoEditarCompra'])->name('apodoEditarCompra');
Route::get('/actu_comp', [beastController::class, 'metodoActualizarCompra'])->name('apodoActualizarCompra');

// Rutas para ventas
Route::match(['get', 'post'], '/regi_vent', [beastController::class, 'metodoRegistroVenta'])->name('apodoRegistroVenta');
Route::get('/carr_vent', [beastController::class, 'metodoCarritoVenta'])->name('apodoCarritoVenta');
Route::post('/chec_vent', [beastController::class, 'metodoCheckoutVenta'])->name('apodoCheckoutVenta');
Route::get('/cons_vent_espe', [beastController::class, 'metodoConsultaVentaEspecifico'])->name('apodoConsultaVentaEspecifico');

// Rutas para reportes
Route::get('/repo_vent', [beastController::class, 'metodoReporteVenta'])->name('apodoReporteVenta');
Route::get('/repo_comp', [beastController::class, 'metodoReporteCompra'])->name('apodoReporteCompra');
Route::get('/repo_gana', [beastController::class, 'metodoReporteGanancia'])->name('apodoReporteGanancia');

// Rutas de prueba
Route::get('/prueba', [beastController::class, 'metodoPrueba'])->name('apodoPrueba');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Ruta de buscar producto 



Route::get('/buscar_producto', [beastController::class, 'metodo_buscarProducto'])->name ('buscarProducto');

// Rutas vista/producto
