@extends('layouts.app')
@section('content')
		<!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#boton").click(function(event) {
					$("#capa").load('quienes');
        });
        $("#contacto").click(function(event) {
					$("#capa").load('contacto');
				});
			});
    </script>
    
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/3.jpg" alt="New York">
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
    <div id="menulateral">  
      <h1>MENU</h1>
    </div>
    <div id="menulateral">  
      <button type="button" id="boton" class="btn btn-primary">QUIENES SOMOS</button>
    </div>
    <div id="menulateral">  
      <button type="button" id="boton" class="btn btn-primary">GALERIA</button>
    </div>
    <div id="menulateral">  
      <button type="button" id="contacto" class="btn btn-primary">CONTACTO</button>
    </div>
  </div>  
  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
    <div id="capa"></div>
  </div>   
</div>
</body>

@endsection

