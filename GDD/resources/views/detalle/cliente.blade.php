@extends('layouts.master')
@section('content')
<h1 align="center" >Datos Cliente</h1>

<table style="width:100%">
	<tr>
		<td><b>Nombre</b></td>
		<td><b>Apellido</b></td>
		<td><b>Email</b></td>
	</tr>
	<tr id="detalles" >
		<td><input type="text" name="nom" value="{{$cliente->Nom}}"></td>
		<td><input type="text" name="Cognom" value="{{$cliente->Cognom}}"></td>
		<td><input type="text" name="email" value="{{$cliente->Email}}"></td>
	</tr>
	<tr>
		<td><b>Telefono</b></td>
		<td><b>Direccion</b></td>
		<td><b>NIF</b></td>
	</tr>
	<tr id="detalles2">
		<td><input type="number" name="telefono" value="{{$cliente->Telefon}}"></td>
		<td><input type="text" name="direccion" value="{{$cliente->Direccion}}"></td>
		<td><input type="text" name="nif" value="{{$cliente->NIF}}" ></td>
	</tr>
	<tr>
		<td><b>Provincia</b></td>
		<td><b>Localidad</b></td>
		<td><b>CP</b></td>
	</tr>
	<tr id="detalles3">
		<td><input type="text" name="provincia" value="{{$cliente->Provincia}}"></td>
		<td><input type="text" name="localidad" value="{{$cliente->Localidad}}"></td>
		<td><input type="text" name="cp" value="{{$cliente->CP}}"></td>		
	</tr>
</table>
<br>
<button onclick="modificar()" >Modificar</button>



     

@stop