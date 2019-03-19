@extends('layouts.master')

@section('content')
<div class='page-header'><h1 align='center' >Nueva Venta</h1></div> 
<form method='post' id='form' class="venta" action('ClientesController@saveVenta')>
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputCom">Comprador</label>
            <input required type="text" class="form-control" name='nombreVenta' id="inputVn" placeholder="Nombre de la venta">
            <label for="inputVn">Nombre de la venta</label>
            <input required type="text" class="form-control" name='nombreVenta' id="inputVn" placeholder="Nombre de la venta">
        </div>
        <button id="sub" class="btn btn-primary">Añadir</button>
</form>

@stop