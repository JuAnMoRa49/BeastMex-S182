<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importa la clase DB

class ProductoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos ingresados por el usuario, incluyendo la foto
        $request->validate([
            // ... (tus reglas de validación actuales)
        ]);
    
        // Manejar la carga de la foto y obtener la ruta
        $rutaFoto = $request->file('foto')->store('fotos_productos', 'public');
    
        // Calcular el precio de venta agregando un 55% al costo de compra
        $costoCompra = $request->input('txtCosto_producto');
        $precioVentaCalculado = $costoCompra * 1.55;
    
        // Insertar los datos en la tabla 'dpto_almacen', incluyendo la ruta de la foto y el precio de venta calculado
        DB::table('dpto_almacen')->insert([
            'nombre_producto' => $request->input('txtNombre_Producto'),
            'no_serie' => $request->input('txtNoSerie_producto'),
            'marca' => $request->input('txtMarca_producto'),
            'cantidad' => $request->input('txtCantidad_producto'),
            'costo_compra' => $costoCompra,
            'precio_venta' => $precioVentaCalculado,
            'fecha_ingreso' => $request->input('txtFechaCompra_producto'),
            'foto' => $rutaFoto, // Almacena la ruta de la foto en la base de datos
            // Agrega las demás columnas según tu estructura
        ]);
    
        // Redirigir o mostrar un mensaje de confirmación
        return redirect('/regi_prod')->with('confirmacion_regi_prod', 'Producto registrado correctamente.');
    }
    
    
    public function mostrarProductos()
    {
        // Recupera todos los productos de la tabla 'dpto_almacen'
        $productos = DB::table('dpto_almacen')->get();

        // Renderiza la vista de productos y pasa la lista de productos como datos
        return view('producto.lista_productos', ['productos' => $productos]);
    }

    public function eliminarProducto($id)
    {
        // Lógica para eliminar el producto por ID
        DB::table('dpto_almacen')->where('id', $id)->delete();

        return response()->json(['message' => 'Producto eliminado correctamente']);
    }

    public function actualizarProducto(Request $request, $id)
    {
        // Validar los datos de actualización (ajústalos según tus necesidades)
        $request->validate([
            'txtNombre_Producto' => 'required|string',
            'txtNoSerie_producto' => 'required|numeric',
            'txtMarca_producto' => 'required|string',
            'txtCantidad_producto' => 'required|integer',
            'txtCosto_producto' => 'required|numeric',
            'txtFechaCompra_producto' => 'required|date',
            // ... otros campos que desees actualizar
        ]);
    
        // Lógica para actualizar el producto en la base de datos
        $costoCompra = $request->input('txtCosto_producto');
        $precioVentaCalculado = $costoCompra * 1.55;
    
        DB::table('dpto_almacen')
            ->where('id', $id)
            ->update([
                'nombre_producto' => $request->input('txtNombre_Producto'),
                'no_serie' => $request->input('txtNoSerie_producto'),
                'marca' => $request->input('txtMarca_producto'),
                'cantidad' => $request->input('txtCantidad_producto'),
                'costo_compra' => $request->input('txtCosto_producto'),
                'precio_venta' => $precioVentaCalculado, // Actualiza el precio de venta
                'fecha_ingreso' => $request->input('txtFechaCompra_producto'),
                // ... otros campos que desees actualizar
            ]);
    
        return response()->json(['message' => 'Producto actualizado correctamente']);
    }
    

   
    // ...

    public function obtenerDetallesProducto($id)
    {
        // Lógica para obtener los detalles de un producto por ID
        $producto = DB::table('dpto_almacen')->where('id', $id)->first();
        return response()->json(['producto' => $producto]);
    }

    public function guardarCambios(Request $request, $id)
    {
        // Lógica para guardar los cambios del producto por ID
        // ...
        return response()->json(['message' => 'Cambios guardados correctamente']);
    }

// ...



}