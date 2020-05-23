<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(Request $usuarios){
        $users = new Usuario();
        $users->nombre = $usuarios["nombre"];
        $users->apellido = $usuarios["apellido"];
        $users->nombre = $usuarios["nombre"];
        $users->email = $usuarios["email"];
        $users->dni = $usuarios["dni"];
        $users->localidad = $usuarios["localidad"];
        $users->provincia = $usuarios["provincia"];
        $users->fecha_nac = $usuarios["fecha"];
        $users->telefono = $usuarios["telefono"];
        $users->sexo = $usuarios["sexo"];
        $users->oficio = $usuarios["oficio"];
        $users->estado = $usuarios["estado"];
        $users->domicilio = $usuarios["domicilio"];

        $users->save();
    }

}
