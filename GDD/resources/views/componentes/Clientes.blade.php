@extends('layouts.master')
@section('content')
<a href="componentes/formClientes"> <img align="right" style="height: 5%; width: 5%;" src="https://image.flaticon.com/icons/png/512/306/306232.png"></a>

@include('../navegacion')

<h1>Cartera de Clientes</h1>

<hr>
<form method="get" class="form-inline" action="/">
    <input type="text"  class="form-control" placeholder="Buscar" aria-label="Search" name="filtro">
    <input class="btn btn-info" type="submit" name="Buscar" value="Buscar">
</form>
<br>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">NIF</th>
            <th scope="col">Localidad</th>
            <th scope="col">CP</th>
        </tr>
    </thead>
    <tbody>
        <script>
            
            datos_json = {!! json_encode($arrayClientes->toArray(), JSON_HEX_TAG) !!}['data'];
            newlist(datos_json,"Clientes");
        </script>
    </tbody>
<!--pasamos todo el array-->
</table>	
{!! $arrayClientes->links()!!}
@stop