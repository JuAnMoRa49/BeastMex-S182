<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormProductos;
use RealRashid\SweetAlert\Facades\Alert;

class beastController extends Controller
{

    public function metodoLogin(){
        return view('login');
    }
    
    public function metodoRegistroProductos(){
        return view('registro_productos');
    }

    public function metodoGuardarProductos(validadorFormProductos $request){
        return view('registro_productos');
    }
}



