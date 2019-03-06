@extends('layouts.master')
@section('content')
<h1 align="center" >Datos Cliente</h1>

<table style="width:100%">
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Email</td>
		<td>Telefono</td>
		<td>Direccion</td>
		<td>NIF</td>
		<td>Provincia</td>
		<td>Localidad</td>
		<td>CP</td>
	</tr>
	<tr>
		<td>{{$cliente->Nom}}</td>
		<td>{{$cliente->Cognom}}</td>
		<td>{{$cliente->Email}}</td>
		<td>{{$cliente->Telefon}}</td>
		<td>{{$cliente->Direccion}}</td>
		<td>{{$cliente->NIF}}</td>
		<td>{{$cliente->Provincia}}</td>
		<td>{{$cliente->Localidad}}</td>
		<td>{{$cliente->CP}}</td>
	</tr>
</table>



     

@stop