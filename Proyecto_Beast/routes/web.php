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




Route::get('/', [beastController::class, 'metodoLogin'])->name('login');
Route::get('/registro_productos', [beastController::class, 'metodoRegistroProductos'])->name('apodoRegistroProductos');
Route::get('/guardar_productos', [beastController::class, 'metodoGuardarProductos'])->name('apodoGuardarProductos');


