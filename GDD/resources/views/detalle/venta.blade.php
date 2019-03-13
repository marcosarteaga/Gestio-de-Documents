@extends('layouts.master')
@section('content')
<?php
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $idVenta = explode("/",$url);
  $docs = DB::table('documentos')->where('id_venta', $idVenta[5])->get(['id','tipo_documento','archivo']);
?>
<h1 class="display-3">Detalle Venta</h1>
<table style="width:100%">
	<tr>
	<td><b>ID</b></td>
	<td><b>Nombre Ventas</b></td>
	<td><b>Fecha de creacion</b></td>	
	</tr>

	<tr>
	<td>{{$Ventas[0]->id}}</td>
	<td>{{$Ventas[0]->nombreVentas}}</td>
	<td>{{$Ventas[0]->created_at}}</td>	
	</tr>
</table>





<script type="text/javascript">
  var infoVentas = '{{$Ventas}}';
  var ConsultaVentas = JSON.parse(infoVentas.replace(/&quot;/g,'"'));
  var ConsultaDocs = <?php echo json_encode($docs);?>;
  detallesFichero(ConsultaDocs,"form-factura");
</script>


@stop