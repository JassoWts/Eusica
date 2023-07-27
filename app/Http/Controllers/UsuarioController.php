<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view ('login');
    }

    public function acceso(Request $request)
    {
        
        // $usuario= $this -> input('usuario');
        $usuario = request('usuario');
        // $correo= $request -> input('correo');
        // $contraseña= $request -> input('contraseña');

        
        if ($usuario="Cecyt12") {
           

            return view('index');
        } else {
          
            return redirect(route('login'))->with('error', 'error', 'Los datos de inicio de sesión son incorrectos.');
        }
       


    }

    public function singinView()
    {
        return view('singin');
    }

    public function singin(Request $request)
    {
        $usuario = new Usuario();
        $usuario -> nom_user =$request -> usuario;
        $usuario -> correo  =$request -> correo ;
        $usuario -> contraseña =$request -> contraseña;
        $usuario ->save();

        return redirect(route('login'));
    }
}
