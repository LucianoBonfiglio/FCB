@extends('layouts.app')
<body>
	<div class="container">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Formulario</a></li>
	        <li><a href="{{ url('/web') }}"><span class="glyphicon glyphicon-globe"></span> Sitio Web</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
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
<footer class="page-footer font-small special-color-dark pt-4">

          <!-- Footer Elements -->
          <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                  <i class="fab fa-facebook-f"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                  <i class="fab fa-twitter"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                  <i class="fab fa-google-plus-g"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                  <i class="fab fa-linkedin-in"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                  <i class="fab fa-dribbble"> </i>
                </a>
              </li>
            </ul>
            <!-- Social buttons -->

          </div>
          <!-- Footer Elements -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> Luciano Bonfiglio</a>
          </div>
          <!-- Copyright -->

        </footer>
</html>