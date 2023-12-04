<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'txtNombre_Usuario' => 'required|string|max:255',
            'txtCorreo_Usuario' => 'required|string|email',
            'txtContrasena_Usuario' => 'required|string|min:8|confirmed',
            'txtPuesto_Usuario' => 'required|integer',
        ]);
    
        // Hash the password
        $password = bcrypt($request->input('txtContrasena_Usuario'));
    
        // Insert the user in the database
        User::create([
            'name' => $request->input('txtNombre_Usuario'),
            'email' => $request->input('txtCorreo_Usuario'),
            'password' => $password,
            'puesto_id' => $request->input('txtPuesto_Usuario'),
        ]);
    
        // Redirect the user to the home page
        return redirect()->route('home')->with('success', 'El usuario se ha creado correctamente.');
    }

    public function showProfile(Request $request)
    {
        $user = Auth::user();
        return view('perfil', ['user' => $user]);
    }
    
    public function mostrarUsuarios()
    {
        // Obtener todos los usuarios de la base de datos usando la clase DB
        $usuarios = DB::table('users')->get();

        // Renderizar la vista de lista de usuarios y pasa la lista de usuarios como datos
        return view('usuario.lista_usuarios', ['usuarios' => $usuarios]);
    }

    public function eliminarUsuario($id)
    {
        // Eliminar el usuario por ID usando la clase DB
        DB::table('users')->where('id', $id)->delete();

        // Redirigir al usuario a la página de lista de usuarios
        return redirect()->route('users.index')->with('success', 'El usuario se ha eliminado correctamente.');
    }

    public function actualizarUsuario(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'txtNombre_Usuario' => 'required|string|max:255',
            'txtCorreo_Usuario' => 'required|string|email',
            'txtContrasena_Usuario' => 'required|string|min:8|confirmed',
            'txtPuesto_Usuario' => 'required|integer',
        ]);
    
        // Actualizar el usuario en la base de datos usando la clase DB
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->input('txtNombre_Usuario'),
                'email' => $request->input('txtCorreo_Usuario'),
                'password' => bcrypt($request->input('txtContrasena_Usuario')),
                'puesto_id' => $request->input('txtPuesto_Usuario'),
            ]);

        // Redirigir al usuario a la página de lista de usuarios
        return redirect()->route('users.index')->with('success', 'El usuario se ha actualizado correctamente.');
    }

    // ...
}
