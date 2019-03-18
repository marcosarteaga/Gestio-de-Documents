@extends('layouts.master')
@section('content')
<?php
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $idVenta = explode("/",$url);
  $docs = DB::table('documentos')->where('id_venta', $idVenta[5])->get(['id','tipo_documento','archivo']);
  $consultaFactura= DB::table('documentos')->where('id_venta', $idVenta[5])->where('tipo_documento','factura')->get(['id','archivo','updated_at']);
  $consultaAlbaran= DB::table('documentos')->where('id_venta', $idVenta[5])->where('tipo_documento','albaran')->get(['id','archivo','updated_at']);
  $consultaPresupuesto= DB::table('documentos')->where('id_venta', $idVenta[5])->where('tipo_documento','presupuesto')->get(['id','archivo','updated_at']);
  $consultaTipo4= DB::table('documentos')->where('id_venta', $idVenta[5])->where('tipo_documento','tipo4')->get(['id','archivo','updated_at']);
  $consultaTipo5= DB::table('documentos')->where('id_venta', $idVenta[5])->where('tipo_documento','tipo5')->get(['id','archivo','updated_at']);



?>
<h1 class="display-3">Detalle Venta</h1>
<table id="tablaVentas" style="width:100%">
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
<br>
<br>
<br>
<br>
<h3 id="factura" >Facturas</h3>

<div class="form-group">
 <?php  echo "<form method='POST'  action('VentaController@store($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 

  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo" value="factura">
  <button type="submit" id="subir" class="btn btn-primary">Enviar</button>
  </form>
</div>
<br>
<br>
<br>


<h3 id="albaran" >Albaran</h3>
<div class="form-group">
 <?php  echo "<form method='POST'  action('VentaController@store($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 

  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo" value="albaran">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<br>
<br>
<br>


<h3 id="presupuesto" >Presupuesto</h3>
<div class="form-group">
 <?php  echo "<form method='POST'  action('VentaController@store($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 

  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo" value="presupuesto">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<br>
<br>
<br>


<h3 id="tipo4" >tipo 4</h3>
<div class="form-group">
 <?php  echo "<form method='POST'  action('VentaController@store($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 

  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo" value="tipo4">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<br>
<br>
<br>


<h3 id="tipo5" >tipo 5</h3>
<div class="form-group">
 <?php  echo "<form method='POST'  action('VentaController@store($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 

  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo"  id="fichero" value="tipo5">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>


<script>
  /* Comprobamos que el archivo subido sea de tipo pdf*/
$(document).ready(function(){
  $('input[type="file"]').on('change', function(){
    var comprobarFichero = $( this ).val().split('.').pop();
      if(comprobarFichero == "pdf"){
        $('#subir').submit();
      }
      else
      {
        var errorPdf = ["nopdf"];
        //createErrorMessage(errorPdf);
        $('input[type="file"]').val('');
        
        
      }


  });
});
</script>


<script type="text/javascript">
  var infoVentas = '{{$Ventas}}';
  var ConsultaVentas = JSON.parse(infoVentas.replace(/&quot;/g,'"'));
  var ConsultaDocs = <?php echo json_encode($docs);?>;
  detalles(ConsultaDocs,"form-factura");

  //mostrar ficheros facturas
  var ficheroFactura = <?php echo json_encode($consultaFactura);?>;
  detallesFichero(ficheroFactura,"factura");
//mostrar ficheros Albaran
  var ficheroAlbaran = <?php echo json_encode($consultaAlbaran);?>;
  detallesFichero(ficheroAlbaran,"albaran");
//mostrar ficheros Albaran
  var ficheroPresupuesto = <?php echo json_encode($consultaPresupuesto);?>;
  detallesFichero(ficheroPresupuesto,"presupuesto");
//mostrar ficheros tipo4
  var ficheroTipo4 = <?php echo json_encode($consultaTipo4);?>;
  detallesFichero(ficheroTipo4,"tipo4");

//mostrar ficheros tipo5
  var ficheroTipo5 = <?php echo json_encode($consultaTipo5);?>;
  detallesFichero(ficheroTipo5,"tipo5");

</script>



@stop