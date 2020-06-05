@extends('layouts.app')
@section('content')
<script type="text/javascript" src={{ asset('js/scripts.js') }}></script>
<div class="container">
	<ul>
		@foreach ($errors->all() as $error)
		<li>
			{{$error}}
		</li>
		@endforeach	
	</ul>
	<form action="modificarUsuarios{{$prodaeditar["id"]}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <input type="hidden" name="id" value="{{$prodaeditar["id"]}}">
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="apellido">Apellido:</label>
	    <input type="text" class="form-control" id="apelido" name="apellido" value="{{old('apellido')}}">
	  </div>  
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="email">Email:</label>
	    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="dni">DNI:</label>
	    <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="localidad">Localidad:</label>
	    <input type="text" class="form-control" id="localidad" name="localidad" value="{{old('localidad')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <label for="provincia">Provincia:</label>
	  <select id="provincia" class="form-control" name="provincia" value="{{old('provincia')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
      </select>
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  	<label for="date">Fecha de nacimiento:</label><br>
		<input type="date" class="form-control" name="fecha" step="1" min="1900-01-01" max="2020-12-31" value="<?php echo date("d-m-y");?>">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="telefono">Telefono:</label>
	    <input type="integer" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
	  </div>  
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <label for="sexo">Sexo:</label>
	  <select id="sexo" class="form-control" name="sexo" value="{{old('sexo')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = "Masculino">Masculino</option>
		<option value = "Femenino">Femenino</option>
      </select>
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="oficio">Oficio:</label>
	    <input type="text" class="form-control" id="oficio" name="oficio" value="{{old('oficio')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <label for="estado">Estado Civil:</label>
	  <select id="estado" class="form-control" name="estado" value="{{old('estado')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = "Soltero">Soltero</option>
		<option value = "Casado">Casado</option>
		<option value = "Viudo">Viudo</option>
		<option value = "Separado">Separado</option>
		<option value = "Divorciado">Divorciado</option>
      </select>
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="domicilio">Domicilio:</label>
	    <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{old('domicilio')}}">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="dnifrente">Foto DNI Frente:</label>
	    <input type="file" class="form-control" id="dnifrente" name="dnifrente" value="">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="dniatras">Foto DNI Dorso:</label>
	    <input type="file" class="form-control" id="dniatras" name="dniatras" value="">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <button type="submit" class="btn btn-default">Modificar</button>
	  </div>
	</form>
	</div>
</div>	
</body>
@endsection
