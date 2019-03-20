@extends('layouts.master')
@section('content')
@include('../navegacion')
<?php
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$idVenta = explode("/",$url);
$id = DB::table('documentos')->where('id_venta', $idVenta[5])->get(['id','tipo_documento','archivo']);
?>


<h1>Modificar</h1>

<div class="form-group">
 <?php  echo "<form method='POST'  action('controllerModificar@modificar($idVenta[5])') accept-charset='UTF-8' enctype='multipart/form-data' files='true' >";?>
  {{ csrf_field() }} 
  <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
  <input type="hidden" name="tipo_archivo" value="factura">
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




@stop