@extends('layouts.master')

@section('content')
<button onclick="error('errorMysql','ESTO ES UN ERROR !!!')">Ejemplo Error</button>
<a href="componentes/formClientes"> <img align="right" style="height: 5%; width: 5%;" src="https://image.flaticon.com/icons/png/512/306/306232.png"></a>
<h1>Clientes</h1>

<hr>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">NIF</th>
            <th scope="col">CP</th>
        </tr>
    </thead>
    <tbody>
        <!--
        <tr href="#">
            <th>ejemplo</th>
            <th>ejemplo 2</th>
            <th>ejemplo 3</th>
            
        </tr>
    -->
        <script>
            var arrayPHP = '{{$arrayClientes}}';
            datos_json = JSON.parse(arrayPHP.replace(/&quot;/g,'"'));
            newlist(datos_json,"Clientes");
        </script>
    </tbody>
<!--pasamos todo el array-->
</table>	
@stop