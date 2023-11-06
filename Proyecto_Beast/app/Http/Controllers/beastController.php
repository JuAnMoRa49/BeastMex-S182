<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormProductos;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\validadorregi_usua;
use App\Http\Requests\validadoredit_usua;
use App\Http\Requests\validadorregi_prod;
use App\Http\Requests\validadoredit_prod;
use App\Http\Requests\validadorregi_prov;
use App\Http\Requests\validadoredit_prov;
use App\Http\Requests\validadorregi_comp;
use App\Http\Requests\validadoregi_vent;
use App\Http\Requests\validadorcons_prod;
use App\Http\Requests\validadorcons_prov;
use App\Http\Requests\validadorcons_usua;
use App\Http\Requests\validadorcons_comp;
use App\Http\Requests\validadorcons_vent;




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

    public function metodoGuardarProducto(validadorregi_prod $req){

        $validated = $req->validate([
            'txtNombre_Producto' => 'required',
            'txtNoSerie_producto' => 'required|numeric',
            'txtMarca_producto' => 'required',
            'txtCantidad_producto' => 'required|numeric',
            'txtCosto_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtPrecioVenta_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtFechaCompra_producto' => 'required|date',
        ]);
      
        return redirect('/regi_prod')->with('confirmacion_regi_prod','Producto guardado');
    }

    public function metodoConsultaProducto(){
        return view('producto/cons_prod');
    }


    public function metodoConsultaProductosEspecifico(validadorcons_prod $req){
        $validated = $req->validate([
            'txtConsulta_Producto' => 'required',
        ]);
      
        return redirect('/cons_prod')->with('confirmacion_cons_prod','Los resultados de tu busqueda estan en la tabla');
    }

    public function metodoEditarProducto(){
        return view('producto/edit_prod');
    }

    public function metodoActualizarProducto(validadoredit_prod $req){
        $validated = $req->validate([
            'txtNombre_Producto' => 'required',
            'txtNoSerie_producto' => 'required|numeric',
            'txtMarca_producto' => 'required',
            'txtCantidad_producto' => 'required|numeric',
            'txtCosto_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtPrecioVenta_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtFechaCompra_producto' => 'required|date',
        ]);
      
        return redirect('/edit_prod')->with('confirmacion_edit_prod','Producto modificado');
    }

    // Funciones para proveedores
    public function metodoRegistroProveedor(){
        return view('proveedor/regi_prov');
    }

    public function metodoGuardarProveedor(validadorregi_prov $req){
        $validated = $req->validate([
            'txtNombre_Proveedor' => 'required',
            'txtEmpresa_Proveedor' => 'required',
            'txtTelefono_Proveedor' => 'required|numeric',
            'txtCorreo_Proveedor' => 'required|email',
        ]);
      
        return redirect('/regi_prov')->with('confirmacion_regi_prov','Provedor registrado');
    }

    public function metodoConsultaProveedor(){
        return view('proveedor/cons_prov');
    }

    public function metodoConsultaProveedorEspecifico(validadorcons_prov $req){
        $validated = $req->validate([
            'txtConsultaProveedor' => 'required',
        ]);
      
        return redirect('/cons_prov')->with('confirmacion_cons_prov','Los resultados de tu busqueda estan en la tabla');
    }

    public function metodoEditarProveedor(){
        return view('proveedor/edit_prov');
    }

    public function metodoActualizarProveedor(validadoredit_prov $req){
        $validated = $req->validate([
            'txtNombre_Proveedor' => 'required',
            'txtEmpresa_Proveedor' => 'required',
            'txtTelefono_Proveedor' => 'required|numeric',
            'txtCorreo_Proveedor' => 'required|email',
        ]);
      
        return redirect('/edit_prov')->with('confirmacion_edit_prov','Provedor modificado');
    }

    // Funciones para usuarios
    public function metodoRegistroUsuario(){
        return view('usuario/regi_usua');
    }

    public function metodoguardarUsuario(validadorregi_usua $req){

        $validated = $req->validate([
            'txtNombre_Usuario' => 'required',
            'txtCorreo_Usuario' => 'required|email',
            'txtContrasena_Usuario' => 'required',
        ]);
      
        return redirect('/regi_usua')->with('confirmacion_regi_usua','Usuario guardado');
    }

    public function metodoConsultaUsuario(){
        return view('usuario/cons_usua');
    }
    
    public function metodoConsultaUsuarioEspecifico(validadorcons_usua $req){
        $validated = $req->validate([
            'txtConsulta_Usuario' => 'required',
        ]);
      
        return redirect('/cons_usua')->with('confirmacion_cons_usua','Los resultados de tu busqueda estan en la tabla');
    }

    public function metodoEditarUsuario(){
        return view('usuario/edit_usua');
    }

    public function metodoActualizarUsuario(validadorregi_usua $req){
        $validated = $req->validate([
            'txtNombre_Usuario' => 'required',
            'txtCorreo_Usuario' => 'required|email',
            'txtContrasena_Usuario' => 'required',
        ]);
      
        return redirect('/edit_usua')->with('confirmacion_edit_usua','Los datos se han modificado');
    }

    // Fuinciones para compras
    public function metodoRegistroCompra()
    {
        return view('compras/regi_comp');
    }

    public function metodoGuardarCompra(validadorregi_comp $req)
    {
        $validated = $req->validate([
            'cliente' => 'required',
            'fecha' => 'required|date',
            'producto' => 'required',
        ]);
      
        return redirect('/regi_comp')->with('confirmacion_regi_comp','La compra se ha guardado');
    }

    public function metodoConsultaCompra()
    {
        return view('compras/cons_comp');
    }

    public function metodoConsultaCompraEspecifico(validadorcons_comp $req)
    {
        $validated = $req->validate([
            'search_id' => 'required|numeric',
        ]);
      
        return redirect('/cons_comp')->with('confirmacion_cons_comp','Los resultados de tu busqueda estan en la tabla');
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

    public function metodoCarritoVenta()
    {
        return view('ventas/carr_vent');
    }

    public function metodoCheckoutVenta(validadoregi_vent $req)
    {
        $validated = $req->validate([
            'cliente' => 'required',
            'fecha' => 'required|date',
            'producto' => 'required',
        ]);
      
        return redirect('/regi_vent')->with('confirmacion_regi_vent','Los resultados de tu busqueda estan en la tabla');
    }

    public function metodoConsultaVenta()
    {
        return view('ventas/cons_vent');
    }

    public function metodoConsultaVentaEspecifico(validadorcons_vent $req)
    {
        $validated = $req->validate([
            'txtConsulta_Venta' => 'required|numeric',
        ]);
      
        return redirect('/cons_vent')->with('confirmacion_cons_vent','Los resultados de tu busqueda estan en la tabla');
    }

    // Funciones para reportes

    public function metodoReporteVenta()
    {
        return view('reportes/repo_vent');
    }

    public function metodoReporteCompra()
    {
        return view('reportes/repo_comp');
    }

    public function metodoReporteGanancia()
    {
        return view('reportes/repo_gana');
    }

    // Funcion de prueba
    public function metodoPrueba(){
        return view('prueba');
    }
}



