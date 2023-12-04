<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;



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
Route::resource('producto', ProductoController::class);
Route::get('/lista_productos', [ProductoController::class, 'mostrarProductos'])->name('lista_productos');
Route::delete('/eliminar-producto/{id}', [ProductoController::class, 'eliminarProducto'])->name('eliminar_producto');
Route::put('/actualizar-producto/{id}', [ProductoController::class, 'actualizarProducto']);
Route::get('/regi_prov', [ProveedorController::class, 'guardarProveedor']);
Route::get('/obtener-detalles-producto/{id}', [ProductoController::class, 'obtenerDetallesProducto']);
Route::put('/guardar-cambios-producto/{id}', [ProductoController::class, 'guardarCambios']);

Route::post('/logout', [beastController::class, 'metodoLogout'])->name('logout');

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
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users', [UserController::class, 'mostrarUsuarios'])->name('users.index');
Route::delete('/users/{id}', [UserController::class, 'eliminarUsuario'])->name('users.destroy');
Route::patch('/users/{id}', [UserController::class, 'actualizarUsuario'])->name('users.update');

Route::get('/usuarios', [UserController::class, 'showUsers'])->name('usuarios.index');
Route::delete('/usuarios/{id}', [UserController::class, 'deleteUser'])->name('usuarios.delete');
Route::get('/usuarios/{id}/editar', [UserController::class, 'editUser'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UserController::class, 'updateUser'])->name('usuarios.update');


// Rutas para compras
Route::get('/regi_comp', [beastController::class, 'metodoRegistroCompra'])->name('apodoRegistroCompra');
Route::post('/save_comp', [beastController::class, 'metodoGuardarCompra'])->name('apodoGuardarCompra');
Route::get('/cons_comp', [beastController::class, 'metodoConsultaCompra'])->name('apodoConsultaCompra');
Route::get('/cons_comp_espe', [beastController::class, 'metodoConsultaCompraEspecifico'])->name('apodoConsultaCompraEspecifico');
Route::get('/edit_comp', [beastController::class, 'metodoEditarCompra'])->name('apodoEditarCompra');
Route::get('/actu_comp', [beastController::class, 'metodoActualizarCompra'])->name('apodoActualizarCompra');

// Rutas para ventas
//Route::get(['get', 'post'], '/regi_vent', [beastController::class, 'metodoRegistroVenta'])->name('apodoRegistroVenta');
Route::get('/carr_vent', [beastController::class, 'metodoCarritoVenta'])->name('apodoCarritoVenta');
Route::post('/chec_vent', [beastController::class, 'metodoCheckoutVenta'])->name('apodoCheckoutVenta');
Route::get('/cons_vent', [beastController::class, 'metodoConsultaVentaEspecifico'])->name('apodoConsultaVentaEspecifico');
Route::get('/regi_vent', [beastController::class, 'metodoRegistroVenta'])->name('apodoRegistroVenta');
Route::get('/obtener-detalles-producto/{id}',[beastController::class,'obtenerDetallesProducto'])->name('detalleProducto');
Route::get('/regi_vent', [BeastController::class, 'metodoRegistroVenta'])->name('apodoRegistroVenta');
Route::post('/guardar-venta', [BeastController::class, 'guardarVenta'])->name('guardarVenta');
Route::get('/mostrar-tickets', [BeastController::class, 'mostrarTickets'])->name('mostrarTickets');
Route::get('/mostrar-tickets-ven', [BeastController::class, 'mostrarTicketsVenta'])->name('mostrarTicketsVenta');


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

Route::get('/formulario-venta', [beastController::class, 'mostrarFormularioVenta']);






// Rutas vista/producto


