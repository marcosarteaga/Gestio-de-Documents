@extends('layouts.master')
@section('content')
@include('../navegacion')
<h1 align="center" >Datos Cliente</h1>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $idCliente = explode("/",$url);
    $infoCliente = DB::table('clientes')->where('id', $idCliente[5])->get();
    $infoVentas = DB::table('ventas')->where('id_cliente', $idCliente[5])->get(['id','nombreVentas','updated_at']);

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
		<td><input disabled type="text" name="Nom" value="{{$cliente->Nom}}"></td>
		<td><input disabled type="text" name="Cognom" value="{{$cliente->Cognom}}"></td>
		<td><input disabled type="text" name="Email" value="{{$cliente->Email}}"></td>
	</tr>
	<tr>
		<td><b>Telefono</b></td>
		<td><b>Direccion</b></td>
		<td><b>NIF</b></td>
	</tr>
	<tr id="detalles2">
		<td><input  disabled type="number" name="Telefon" value="{{$cliente->Telefon}}"></td>
		<td><input  disabled type="text" name="Direccion" value="{{$cliente->Direccion}}"></td>
		<td><input  disabled type="text" name="nif" value="{{$cliente->NIF}}" ></td>
	</tr>
	<tr>
		<td><b>Provincia</b></td>
		<td><b>Localidad</b></td>
		<td><b>CP</b></td>
	</tr>
	<tr id="detalles3">
		<td><input  disabled type="text" name="Provincia" value="{{$cliente->Provincia}}"></td>
		<td><input disabled type="text" name="Localidad" value="{{$cliente->Localidad}}"></td>
		<td><input  disabled type="text" name="CP" value="{{$cliente->CP}}"></td>		
	</tr>
</table>
<br>
<input type="submit" class="btn btn-info" id="actualizar" disabled="" value="Actualizar">
</form>
<br>
<button class="btn btn-info" onclick="modificar()" >Modificar</button>


</form>
<br>

<br><br>
<a href="componentes/formVentas/{{$idCliente[5]}}"> 
	<img align="right" style="height: 5%; width: 5%;" src="https://image.flaticon.com/icons/png/512/306/306232.png">
</a>

<h1 id="ventas" align="Left" >Datos Ventas</h1>
<hr>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Modificacion</th>
        </tr>
    </thead>
    <tbody class="Venta">
		<script type="text/javascript">
			var ConsultaVentas = <?php echo json_encode($infoVentas);?>;
			newlist(ConsultaVentas,"Ventas");
			//detalles(ConsultaVentas,"ventas");
		</script>
	</tbody>
</table>


@stop