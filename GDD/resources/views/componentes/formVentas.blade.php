@extends('layouts.master')

@section('content')
<?php 
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $idCliente = explode("/",$url);
?>
<div class='page-header'><h1 align='center' >Nueva Venta</h1></div> 
<form method='post' id='form' class="venta" action('ClientesController@saveVenta')>
        {{csrf_field()}}
        <div class="form-group">
            <input required type="text" class="form-control" name='id' value="{{$idCliente[7]}}" hidden>
            <label for="inputCom">Comprador</label>
            <input required type="text" class="form-control" name='Comprador' id="inputCom" placeholder="Nombre del comprador">
            <label for="inputVn">Nombre de la venta</label>
            <input required type="text" class="form-control" name='nombreVenta' id="inputVn" placeholder="Nombre de la venta">
        </div>
        <button id="sub" class="btn btn-primary">Añadir</button>
</form>

@stop