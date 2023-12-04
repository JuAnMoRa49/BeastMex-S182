<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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
use DB;
use Carbon\Carbon;


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

    public function showProfile()
    {
        $user = Auth::user();
        return view('perfil', ['user' => $user]);
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

    public function metodoLogout(){
        return view('extra/login');
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

    

    // Fuinciones para compras
    public function metodoRegistroCompra()
    {
        $consultaCompras= DB::table('dpto_compras')->get();
        return view('compras/regi_comp', compact('consultaCompras'));
    }

    public function metodoGuardarCompra(validadorregi_comp $req)
    {
        $validated = $req->validate([
            'cliente' => 'required',
            'fecha' => 'required|date',
            'producto' => 'required',
        ]);

        DB::table('dpto_compras')->insert([
            'nombre_cliente'=>$req->input('cliente'),
            'fecha_compra'=>$req->input('fecha'),
            'producto_compra'=>$req->input('producto'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
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

        $searchId = $validated['search_id'];


        $variable= DB::table('dpto_compras')->where('id', $searchId)->get();



        return view('compras/cons_comp', compact('variable'));

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
        $productos = \DB::table('dpto_almacen')->get(['id', 'nombre_producto', 'cantidad', 'precio_venta']);
        return view('ventas/regi_vent', compact('productos'));
    }

    public function guardarVenta(Request $request)
    {
        // Validar la entrada del formulario
        $request->validate([
            'cliente' => 'required|string|max:255',
            'fecha' => 'required|date',
            'producto' => 'required|exists:dpto_almacen,id',
            'cantidadInput' => 'required|integer|min:1',
            'totalVenta' => 'required|numeric',
        ]);
    
        // Obtener los datos del formulario
        $cliente = $request->input('cliente');
        $fecha = $request->input('fecha');
        $productoId = $request->input('producto');
        $cantidad = $request->input('cantidadInput');
        $precio = $request->input('totalVenta');
    
        // Obtener información del producto
        $producto = \DB::table('dpto_almacen')->find($productoId);
    
        // Validar que hay suficiente cantidad disponible
        if ($cantidad > $producto->cantidad) {
            return redirect()->route('apodoRegistroVenta')->with('error', 'No hay suficiente cantidad disponible.');
        }
    
        // Calcular el total de la venta
        $totalVenta = $cantidad * $producto->precio_venta;
    
        // Guardar la venta en la base de datos
        \DB::table('ticket_ventas')->insert([
            'fecha' => $fecha,
            'datos_cliente' => $cliente,
            'productos' => $producto->nombre_producto,
            'cantidad' => $cantidad,
            'precio' => $totalVenta,
            'total_venta' => $totalVenta, // Agrega esta línea
        ]);
    
        // Actualizar la cantidad en el almacen
        \DB::table('dpto_almacen')->where('id', $productoId)->decrement('cantidad', $cantidad);
    
        return redirect()->route('apodoRegistroVenta')->with('confirmacion_regi_vent', 'Venta registrada con éxito.');
    }

    public function mostrarTicketsVenta()
    {
        $tickets_ven = \DB::table('ticket_ventas')->get();
        return view('ventas/tickets_ven', ['tickets_ven' => $tickets_ven]);
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
        $req->validate([
            'txtConsulta_Venta' => 'required|numeric',
        ]);
    
        // Reemplaza 'ventas' con el nombre real de tu tabla de ventas
        $venta = DB::table('ventas')
            ->where('id', $req->txtConsulta_Venta)
            ->first();
    
        if ($venta) {
            // Puedes ajustar esta lógica según la estructura de tu tabla
            $resultados = [
                'No. Venta' => $venta->id,
                'Cliente' => $venta->cliente,
                'Fecha' => $venta->fecha,
                'Total' => $venta->total,
            ];
    
            return view('ventas/cons_vent', ['resultados' => $resultados]);
        } else {
            return redirect('/cons_vent')->with('confirmacion_cons_vent_espe', 'No se encontraron resultados para la venta especificada.');
        }
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

    // En tu controlador
    public function mostrarFormularioVenta()
    {
        //$productos = DB::table('dpto_almacen')->pluck('nombre_producto', 'id'); // Obtener datos de la tabla dpto_almacen
        //return view('apodoRegistroVenta', compact('productos'));
    }


    // public function obtenerDetallesProducto($id)
    // {
    //     // Lógica para obtener detalles del producto según el ID
    //     $producto = DB::table('dpto_almacen')->find($id);

    //     if ($producto) {
    //         // Si se encuentra el producto, devuelve los detalles en formato JSON
    //         return response()->json(['success' => true, 'producto' => $producto]);
    //     } else {
    //         // Si no se encuentra el producto, devuelve un mensaje de error en formato JSON
    //         return response()->json(['success' => false, 'mensaje' => 'Producto no encontrado']);
    //     }
    // }

    







}

