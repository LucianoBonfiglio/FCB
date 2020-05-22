@extends('layouts.app')
@section('content')
<script type="text/javascript" src={{ asset('js/scripts.js') }}></script>
	<form>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" id="nombre" name="nombre">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="apellido">Apellido:</label>
	    <input type="text" class="form-control" id="apelido" name="apellido">
	  </div>  
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="email">Email:</label>
	    <input type="email" class="form-control" id="email" name="email">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="dni">DNI:</label>
	    <input type="text" class="form-control" id="dni" name="dni">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <label for="provincia">Provincia:</label>
	  <select id="provincia" class="form-control" name="provincia">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = ""></option>
      </select>
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="telefono">Telefono:</label>
	    <input type="integer" class="form-control" id="telefono" name="telefono">
	  </div>  
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <label for="sexo">Sexo:</label>
	  <select id="sexo" class="form-control" name="sexo">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = "masculino">Masculino</option>
		<option value = "femenino">Femenino</option>
      </select>
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="oficio">Oficio:</label>
	    <input type="oficio" class="form-control" id="oficio" name="oficio">
	  </div>
    
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <button type="submit" class="btn btn-default">Submit</button>
	  </div>
	</form>
	</div>
</body>

@endsection
