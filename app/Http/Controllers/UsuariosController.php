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

    Public function listado (){
        $usuarios = Usuario::all();
        $vac = compact("usuarios");
        return view("listadoUsuario", $vac);
    }

    public function delete(Request $usuario)
    {
        $id = $usuario["id"];
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect("/listadoUsuario");
    }
    
    public function update(Request $modi)
    {
        if(request()->dni_frente){
            $ruta_archivo = request()->file('dni_frente')->store('public/storage/');
            if($modi->dni_frente){
                Storage::delete('public/storage/'.$modi->dni_frente);
            }
        }
        if(request()->dni_atras){
            $ruta_archivo = request()->file('dni_atras')->store('public/storage/');
            if($modi->dni_atras){
                Storage::delete('public/storage/'.$modi->dni_atras);
            }
        }
        $id = $modi["id"];
        $modi = Usuario::find($id);
        $modi->update([
            'nombre'=>request()->nombre,
            'apellido'=>request()->apellido,
            'email'=>request()->email,
            'dni'=>request()->dni,
            'localidad'=>request()->localidad,
            'provincia'=>request()->provincia,
            'fecha_nac'=>request()->fecha_nac,
            'sexo'=>request()->sexo,
            'oficio'=>request()->oficio,
            'estado'=>request()->estado,
            'domicilio'=>request()->domicilio,
            'dni_frente'=> isset($ruta_archivo) ? basename($ruta_archivo): $modi->dni_frente,
            'dni_atras'=> isset($ruta_archivo) ? basename($ruta_archivo): $modi->dni_atras,
        ]);
        return redirect()->route('home', $modi)->with(['status'=> "Se editó el usuario $modi->name"]);
    }
}
