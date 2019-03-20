@extends('layouts.master')
@section('content')
@include('../navegacion')
<h1 align="center" >Datos Cliente</h1>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $idCliente = explode("/",$url);
    $infoCliente = DB::table('clientes')->where('id', $idCliente[5])->get();
    
    


echo "<form method='post' action('ClientesController@update($idCliente[5])') >";
?>

{{csrf_field()}}
<table style="width:100%">
	<tr>
		<td><b>Nombre</b></td>
		<td><b>Apellido</b></td>
		<td><b>Email</b></td>
	</tr>
	<tr id="detalles" >
		<td><input disabled type="text" name="Nom" value="{{$cliente[0]->Nom}}"></td>
		<td><input disabled type="text" name="Cognom" value="{{$cliente[0]->Cognom}}"></td>
		<td><input disabled type="text" name="Email" value="{{$cliente[0]->Email}}"></td>
	</tr>
	<tr>
		<td><b>Telefono</b></td>
		<td><b>Direccion</b></td>
		<td><b>NIF</b></td>
	</tr>
	<tr id="detalles2">
		<td><input  disabled type="number" name="Telefon" value="{{$cliente[0]->Telefon}}"></td>
		<td><input  disabled type="text" name="Direccion" value="{{$cliente[0]->Direccion}}"></td>
		<td><input  disabled type="text" name="nif" value="{{$cliente[0]->NIF}}" ></td>
	</tr>
	<tr>
		<td><b>Provincia</b></td>
		<td><b>Localidad</b></td>
		<td><b>CP</b></td>
	</tr>
	<tr id="detalles3">
		<td><input  disabled type="text" name="Provincia" value="{{$cliente[0]->Provincia}}"></td>
		<td><input disabled type="text" name="Localidad" value="{{$cliente[0]->Localidad}}"></td>
		<td><input  disabled type="text" name="CP" value="{{$cliente[0]->CP}}"></td>		
	</tr>
</table>
<br>
<input type="submit" class="" id="actualizar" disabled="" value="Actualizar">
</form>
<br>
<button class="btn btn-info" onclick="modificar()" >Modificar</button>


<br><br>


<h1 id="ventas" align="center" >Datos Ventas</h1>
 <?php
 echo "<form method='get' id='form' class='form-inline' action='/detalle/cliente/$idCliente[5]'>";?>
 <input type="date" placeholder="Buscar" aria-label="Search" name="filtro">
 <input type="radio" name="estado" value="Activo">Activo
 <input type="radio" name="estado" value="No Activo">No Activo
 <input class="btn btn-info" type="submit"  name="Buscar" value="Buscar">
</form>


<script type="text/javascript">
	var ConsultaVentas = <?php echo json_encode($infoVentas);?>;
    detalles(ConsultaVentas,"form");
</script>



@stop