<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    private $mensajes = [
        'mensaje1' => "Login o contraseña erroneos",
    ];

    function Home () {
        return view('base/welcome');
    }
    function Login() {
        return view("base.login");
    }

    function ForgotPassword() {
        return view("base.forgotpassword");
    }
    function Logged() {
        return view("base.logged");
    }

    public function recuperarContrasena (Request $peticion) {
        
        $correo = $peticion->input('correo');

        return redirect('login');
    }

    function enviarmensaje(Request $peticion, $mensaje = ''){
        $datos = [];
        if(isset($this->mensajes[$mensaje])){
            $datos = [
                'mensaje' => $this->mensajes[$mensaje],
            ];
        }
        return view('base.ruta15')->with($datos);
    }

    public function iniciarSesion (Request $peticion,$mensaje='') {

        $correo = $peticion->input('correo');
        $datos=[];

        if(strcasecmp($correo, 'antonio@gmail.com') === 0){
            return redirect('Logged')->withInput($peticion->except('contrasena'));
        }

        else{
            return redirect('login/');
            // $mensaje="Login o contraseña erroneos";
            // $datos = [
            //     'mensaje' => $this->mensajes[$mensaje],
            // ];
            // return view('login')->with($datos);
        }
    }
}