<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/x-icon"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
 
<body> 
<script type="text/javascript" src={{ asset('js/scripts.js') }}></script>
<div class="contacto">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13393.809043121446!2d-60.6378356!3d-32.939067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9fdf83d844878fe6!2sFundaci%C3%B3n%20Libertad!5e0!3m2!1ses!2sar!4v1588546547633!5m2!1ses!2sar" width="100%" height="461" frameborder="0" style="border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="datos">
        <div class="row">
            <div class="col-lg-3">
                <div class="datos-info">
                    <div class="datos-item">
                        <a href="tel:123-456-789"><i class="fas fa-phone-alt"></i></a>
                        <p>Lunes a Viernes de 9am a 6pm</p>
                    </div>
                    <div class="datos-item">
                        <a href="mailto:abc@email.com"><i class="far fa-envelope"></i></a>
                        <p>Envianos tus consultas!</p>
                    </div>
                    <div class="datos-item">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form id="form1" method="POST" action="/contacto">
                {{csrf_field()}}
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" cols="20" placeholder="Dejanos tus comentarios!" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dejanos tus comentarios!'"></textarea>
                        </div>
                    <div class="text-right">
                        <button type="submit" value="submit" class="btn btn-outline-dark">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>