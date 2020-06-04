@extends('layouts.app')
<script type="text/javascript" src={{ asset('js/scripts.js') }}></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Lista de registros</h1>
                    <table>
                    @forelse ($usuarios as $usuario)
                        <tr>
                        <td>{{$usuario["nombre"]}}</td>
                        <td>{{$usuario["apellido"]}}</td>
                        <td>{{$usuario["email"]}}</td>
                        <td>{{$usuario["dni"]}}</td>
                        <td>{{$usuario["localidad"]}}</td>
                        <td>{{$usuario["provincia"]}}</td>
                        <td>{{$usuario["fecha_nac"]}}</td>
                        <td>{{$usuario["telefono"]}}</td>
                        <td>{{$usuario["sexo"]}}</td>
                        <td>{{$usuario["oficio"]}}</td>
                        <td>{{$usuario["estado"]}}</td>
                        <td>{{$usuario["domicilio"]}}</td>
                        <td><img src="/storage/{{$usuario->dni_frente}}" alt=""></td>
                        <td><img src="/storage/{{$usuario->dni_atras}}" alt=""></td>
                        <td>{{$usuario["fecha"]}}</td>

                        @if(Auth::user()->rol==="administrador")
                        <td><form action="{{ url('/modificarUsuario') }}" method="GET" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="submit" name="" value="Modificar">
                            </form></td>
                            <td><form action="{{URL::to('/usuariosdelete') }}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$usuario->id}}">
                                <input type="submit" name="" value="Eliminar Usuario">
                            </form></td>
                        @endif
                        </tr>
                        @empty
                        <p>No hay usuarios.</p>
                    @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
