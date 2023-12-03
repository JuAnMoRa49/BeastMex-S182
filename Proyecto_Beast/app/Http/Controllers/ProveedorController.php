<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Almacena un nuevo proveedor en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardarProveedor(Request $request)
    {
        // Validación de datos
        $request->validate([
            'txtNombre_Proveedor' => 'required|string',
            'txtEmpresa_Proveedor' => 'required|string',
            'txtTelefono_Proveedor' => 'required|numeric',
            'txtCorreo_Proveedor' => 'required|email',
        ]);

        // Crear un nuevo proveedor y almacenar los datos
        Proveedor::create([
            'nombre' => $request->input('txtNombre_Proveedor'),
            'direccion' => $request->input('txtEmpresa_Proveedor'),
            'telefono' => $request->input('txtTelefono_Proveedor'),
            'email' => $request->input('txtCorreo_Proveedor'),
        ]);

        // Redireccionar o realizar cualquier acción adicional
        return redirect('/ruta-de-redireccion')->with('confirmacion_regi_prov', 'Proveedor registrado exitosamente.');
    }
}
