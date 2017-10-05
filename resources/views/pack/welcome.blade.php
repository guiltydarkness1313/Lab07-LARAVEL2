<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>El Yisus</title>


    <body>
        <a>LUL</a>
        <p>{{$mensaje}}<br>{{$pais}}</p>
    <img src="http://www.flags-and-anthems.com/media/flags/flagge-chile.gif">
    <img src="https://media.giphy.com/media/HrzqeT65gZH3y/giphy.gif">
    <a>@foreach($canasta as $fru)
           {{$fru}}<br>
        @endforeach</a>
        @extends('layout.master')

    @section('menu')
        @parent
        <p>este contenido es añadido al menu principal</p>
        @stop

    @section('content')
        <p>Este apartado aparecera en la seccion content</p>
        @stop
    </body>
</html>
