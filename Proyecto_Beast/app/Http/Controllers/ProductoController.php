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
            'txtNombre_Producto' => 'required|string',
            'txtNoSerie_producto' => 'required|numeric',
            'txtMarca_producto' => 'required|string',
            'txtCantidad_producto' => 'required|integer',
            'txtCosto_producto' => 'required|numeric',
            'txtPrecioVenta_producto' => 'required|numeric',
            'txtFechaCompra_producto' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Cambia las extensiones según tus necesidades
        ]);

        // Manejar la carga de la foto y obtener la ruta
        $rutaFoto = $request->file('foto')->store('fotos_productos', 'public');

        // Insertar los datos en la tabla 'dpto_almacen', incluyendo la ruta de la foto
        DB::table('dpto_almacen')->insert([
            'nombre_producto' => $request->input('txtNombre_Producto'),
            'no_serie' => $request->input('txtNoSerie_producto'),
            'marca' => $request->input('txtMarca_producto'),
            'cantidad' => $request->input('txtCantidad_producto'),
            'costo_compra' => $request->input('txtCosto_producto'),
            'precio_venta' => $request->input('txtPrecioVenta_producto'),
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

    public function editarProducto(Request $request, $id)
{
    // Validar los datos del formulario de edición
    $request->validate([
        'nombre_producto' => 'required|string',
        'no_serie' => 'required|numeric',
        'marca' => 'required|string',
        'cantidad' => 'required|integer',
        'costo_compra' => 'required|numeric',
        'precio_venta' => 'required|numeric',
        'fecha_ingreso' => 'required|date',
        // Agrega las reglas de validación para los demás campos según tu estructura
    ]);

    // Obtener el producto existente por su ID
    $producto = Producto::findOrFail($id);

    // Actualizar los datos del producto con los nuevos valores del formulario
    $producto->update([
        'nombre_producto' => $request->input('nombre_producto'),
        'no_serie' => $request->input('no_serie'),
        'marca' => $request->input('marca'),
        'cantidad' => $request->input('cantidad'),
        'costo_compra' => $request->input('costo_compra'),
        'precio_venta' => $request->input('precio_venta'),
        'fecha_ingreso' => $request->input('fecha_ingreso'),
        // Actualiza los demás campos según tu estructura
    ]);

    // Redirigir o responder según tus necesidades
    return redirect()->route('lista_productos')->with('confirmacion_edicion', 'Producto editado correctamente.');
}


    

    

}
