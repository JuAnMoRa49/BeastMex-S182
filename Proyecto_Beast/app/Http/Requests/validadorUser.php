<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUser;
use DB;

class userController extends Controller
{
    public function store(validadorUser $request)
    {
        DB::table('users')->insert([
            'name' => $request->input('txtNombre_Usuario'),
            'email' => $request->input('txtCorreo_Usuario'),
            'puesto' => $request->input('txtPuesto_Usuario'),
            'password' => $request->input('txtContrasena_Usuario'),
        ]);

        return redirect('/user/create')->with('confirmacion', 'Tu u fue almacenado');
    }
}
