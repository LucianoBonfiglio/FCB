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
    <h2>QUIENES SOMOS</h2>
    <div class="datos">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia quidem earum vel libero, quae magni! Atque optio id ut quidem eveniet sint doloremque, corrupti quibusdam accusantium pariatur repellendus excepturi.</p>
    </div>
    <h2>NUESTROS OBJETIVOS</h2>
    <div class="datos">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia quidem earum vel libero, quae magni! Atque optio id ut quidem eveniet sint doloremque, corrupti quibusdam accusantium pariatur repellendus excepturi.</p>
    </div>

</body>