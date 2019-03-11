<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- scripts JS + Bootstrap -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    

    <!--CSS personalizado -->
    <link rel="stylesheet" href="{{asset('css/component-css.css')}}">
    <!--Js personalizado -->
    <script src="{{ asset('js/component-js.js')}}"></script> 
    <!--Js Modificar detalles clientes -->
    <script type="text/javascript" src="{{ asset('js/modificarDetalles.js')}}"></script>
    <title>GDD</title>
  </head>
  <body> 
    <!-- Incluimos la barra de navegacion sin funciones acutalmente -->
      @include('componentes.navbar')
    <!-- colocamos el Div donde estara colocado los errores -->
      <div id="error" class="globalError">
      </div>
    <!-- Div para el contenido de las paginas -->
      <div class="container ">
        @yield('content')
      </div>
  </body>
</html>