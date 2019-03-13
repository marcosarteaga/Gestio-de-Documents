@extends('layouts.master')
@section('content')
<?php
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $idVenta = explode("/",$url);
  $docs = DB::table('documentos')->where('id_venta', $idVenta[5])->get(['id','tipo_documento','archivo']);
?>
<h1 class="display-3">Detalle Venta</h1>
<label>ID</label>
<label>Nombre Ventas</label>
<label></label>
<label>{{$Ventas[0]->id}}</label>



<script type="text/javascript">
  var infoVentas = '{{$Ventas}}';
  var ConsultaVentas = JSON.parse(infoVentas.replace(/&quot;/g,'"'));
  var ConsultaDocs = <?php echo json_encode($docs);?>;
  detallesFichero(ConsultaDocs,"form-factura");
</script>


@stop