<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormProductos;
use RealRashid\SweetAlert\Facades\Alert;

class beastController extends Controller
{

    // Funciones para el login
    public function metodoLogin(){
        return view('extra/login');
    }

    public function metodoPerfil(){
        return view('extra/perfil');
    }
    
    // Funciones para productos
    public function metodoRegistroProducto(){
        return view('producto/regi_prod');
    }

    public function metodoGuardarProductos(validadorFormProductos $request){
        return view('producto/save_prod');
    }

    public function metodoConsultaProducto(){
        return view('producto/cons_prod');
    }

    public function metodoConsultaProductosEspecifico(){
        return view('producto/cons_prod_espe');
    }

    public function metodoEditarProducto(){
        return view('producto/edit_prod');
    }

    public function metodoActualizarProducto(){
        return view('producto/actu_prod');
    }

    // Funciones para proveedores
    public function metodoRegistroProveedor(){
        return view('proveedor/regi_prov');
    }

    public function metodoGuardarProveedor(){
        return view('proveedor/save_prov');
    }

    public function metodoConsultaProveedor(){
        return view('proveedor/cons_prov');
    }

    public function metodoConsultaProveedorEspecifico(){
        return view('proveedor/cons_prov_espe');
    }

    public function metodoEditarProveedor(){
        return view('proveedor/edit_prov');
    }

    public function metodoActualizarProveedor(){
        return view('proveedor/actu_prov');
    }

    // Funciones para usuarios
    public function metodoRegistroUsuario(){
        return view('usuario/regi_usua');
    }

    public function metodoGuardarUsuario(){
        return view('usuario/save_usua');
    }

    public function metodoConsultaUsuario(){
        return view('usuario/cons_usua');
    }
    
    public function metodoConsultaUsuarioEspecifico(){
        return view('usuario/cons_usua_espe');
    }

    public function metodoEditarUsuario(){
        return view('usuario/edit_usua');
    }

    public function metodoActualizarUsuario(){
        return view('usuario/actu_usua');
    }

    // Fuinciones para compras
    public function metodoRegistroCompra()
    {
        return view('compras/regi_comp');
    }

    public function metodoGuardarCompra()
    {
        return view('compras/save_comp');
    }

    public function metodoConsultaCompra()
    {
        return view('compras/cons_comp');
    }

    public function metodoConsultaCompraEspecifico()
    {
        return view('compras/cons_comp_espe');
    }

    public function metodoEditarCompra()
    {
        return view('compras/edit_comp');
    }

    public function metodoActualizarCompra()
    {
        return view('compras/actu_comp');
    }

    // Funciones para ventas
    public function metodoRegistroVenta()
    {
        return view('ventas/regi_vent');
    }

    public function metodoGuardarVenta()
    {
        return view('ventas/save_vent');
    }

    public function metodoCheckoutVenta()
    {
        return view('ventas/chec_vent');
    }

    public function metodoConsultaVenta()
    {
        return view('ventas/cons_vent');
    }

    public function metodoConsultaVentaEspecifico()
    {
        return view('ventas/cons_vent_espe');
    }

    // Funciones para reportes

    public function metodoReporteVentas()
    {
        return view('reportes/repo_vent');
    }

    public function metodoReporteCompras()
    {
        return view('reportes/repo_comp');
    }

    public function metodoReporteGanancias()
    {
        return view('reportes/repo_gana');
    }

    // Funcion de prueba
    public function metodoPrueba(){
        return view('prueba');
    }
}



