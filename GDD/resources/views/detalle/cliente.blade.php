@extends('layouts.master')
@section('content')
<h1 align="center" >Datos Cliente</h1>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $idCliente = explode("/",$url);
    $infoCliente = DB::table('clientes')->where('id', $idCliente[5])->get();
    $infoVentas = DB::table('ventas')->where('id_cliente', $idCliente[5])->get(['id','fichero','updated_at']);
    


echo "<form method='get' action='detalle/cliente/".$idCliente[5]."' >";
?>
<table style="width:100%">
	<tr>
		<td><b>Nombre</b></td>
		<td><b>Apellido</b></td>
		<td><b>Email</b></td>
	</tr>
	<tr id="detalles" >
		<td><input disabled type="text" name="nom" value="{{$cliente->Nom}}"></td>
		<td><input disabled type="text" name="Cognom" value="{{$cliente->Cognom}}"></td>
		<td><input disabled type="text" name="email" value="{{$cliente->Email}}"></td>
	</tr>
	<tr>
		<td><b>Telefono</b></td>
		<td><b>Direccion</b></td>
		<td><b>NIF</b></td>
	</tr>
	<tr id="detalles2">
		<td><input  disabled type="number" name="telefono" value="{{$cliente->Telefon}}"></td>
		<td><input  disabled type="text" name="direccion" value="{{$cliente->Direccion}}"></td>
		<td><input  disabled type="text" name="nif" value="{{$cliente->NIF}}" ></td>
	</tr>
	<tr>
		<td><b>Provincia</b></td>
		<td><b>Localidad</b></td>
		<td><b>CP</b></td>
	</tr>
	<tr id="detalles3">
		<td><input  disabled type="text" name="provincia" value="{{$cliente->Provincia}}"></td>
		<td><input disabled type="text" name="localidad" value="{{$cliente->Localidad}}"></td>
		<td><input  disabled type="text" name="cp" value="{{$cliente->CP}}"></td>		
	</tr>
</table>
<br>
<input type="submit" name="" value="Actualizar">
</form>

<button onclick="modificar()" >Modificar</button>


<br><br>


<h1 id="ventas" align="center" >Datos Ventas</h1>

<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $idCliente = explode("/",$url);
    $infoCliente = DB::table('clientes')->where('id', $idCliente[5])->get();
    $infoVentas = DB::table('ventas')->where('id_cliente', $idCliente[5])->get(['id','fichero','updated_at']);
    
?>



<script type="text/javascript">
	var ConsultaVentas = <?php echo json_encode($infoVentas);?>;
    detalles(ConsultaVentas,"ventas");
</script>



@stop