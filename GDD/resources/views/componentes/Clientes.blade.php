@extends('layouts.master')
@section('content')
<a href="componentes/formClientes"> <img align="right" style="height: 5%; width: 5%;" src="https://image.flaticon.com/icons/png/512/306/306232.png"></a>
@include('../navegacion')
<h1>Cartera de Clientes</h1>

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
        <script>
            var arrayPHP = '{{$arrayClientes}}';
            datos_json = JSON.parse(arrayPHP.replace(/&quot;/g,'"'));
            newlist(datos_json,"Clientes");
        </script>
    </tbody>
</table>	
@stop