@extends('layouts.app')
@section('content')
	<form>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" id="nombre">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="apellido">Apellido:</label>
	    <input type="text" class="form-control" id="apelido">
	  </div>  
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="email">Email:</label>
	    <input type="email" class="form-control" id="email">
	  </div>
	  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <label for="dni">DNI:</label>
	    <input type="text" class="form-control" id="dni">
	  </div>
	   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	    <button type="submit" class="btn btn-default">Submit</button>
	  </div>    
	</form>
	</div>
</body>
@endsection
