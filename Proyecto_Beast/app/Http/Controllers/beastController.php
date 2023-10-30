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
        return view('save_prod');
    }

    public function metodoConsultaProducto(){
        return view('producto/cons_prod');
    }

    public function metodoConsultaProductosEspecifico(){
        return view('cons_prod_espe');
    }

    public function metodoEditarProducto(){
        return view('producto/edit_prod');
    }

    public function metodoActualizarProducto(){
        return view('actu_prod');
    }

    // Funciones para proveedores
    public function metodoRegistroProveedor(){
        return view('proveedor/regi_prov');
    }

    public function metodoGuardarProveedor(){
        return view('save_prov');
    }

    public function metodoConsultaProveedor(){
        return view('proveedor/cons_prov');
    }

    public function metodoConsultaProveedorEspecifico(){
        return view('cons_prov_espe');
    }

    public function metodoEditarProveedor(){
        return view('proveedor/edit_prov');
    }

    public function metodoActualizarProveedor(){
        return view('actu_prov');
    }

    // Funciones para usuarios
    public function metodoRegistroUsuario(){
        return view('regi_usua');
    }

    public function metodoGuardarUsuario(){
        return view('save_usua');
    }

    public function metodoConsultaUsuario(){
        return view('cons_usua');
    }
    
    public function metodoConsultaUsuarioEspecifico(){
        return view('cons_usua_espe');
    }

    public function metodoEditarUsuario(){
        return view('edit_usua');
    }

    public function metodoActualizarUsuario(){
        return view('actu_usua');
    }


}



