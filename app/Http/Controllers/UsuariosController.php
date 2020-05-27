<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(Request $usuarios){
        $reglas = [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|unique:usuarios,email',
            'dni' => 'required|integer|unique:usuarios,dni',  
            'localidad' => 'required|string',
            'provincia' => 'required',
            'fecha' => 'required|date',
            'telefono' => 'required|integer',
            'sexo' => 'required',
            'oficio' => 'required|string',
            'estado' => 'required',
            'domicilio' => 'required',
            'dnifrente' => 'required',
            'dniatras' => 'required'
        ];

        $mensajes = [
            "required" => "El campo :attribute no puede estar vacio",
            "string" => "El campo :attribute debe ser un texto",
            "unique" => "El campo :attribute se encuentra repetido",
            "integer" => "El campo :attribute debe ser numerico",
            "email" => "El mail debe tener el formato correcto",
            "date" => "El campo :attribute debe ser una fecha"
        ];

        $this->validate($usuarios, $reglas, $mensajes);

        $users = new Usuario();
        $ruta=$usuarios->file('dnifrente')->store('public');
        $nombreArchivo = basename($ruta);
        $users->dni_frente = $nombreArchivo;

        $ruta2=$usuarios->file("dniatras")->store("public");
        $nombreArchivo2 = basename($ruta2);
        $users->dni_atras = $nombreArchivo2;

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
        return redirect()->back();
    }
}
