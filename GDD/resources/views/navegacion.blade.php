    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estilo.css')}}">
    <script type="text/javascript" src="{{asset('js/funciones.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 

<ol class="breadcrumb">
   <li>
       <i class="fa fa-home"></i>
       <a href="#" onclick="location.href = '{{ url('/')}}'">HOME</a>
   </li>

   @for($i = 2; $i <= count(Request::segments()); $i++)
      <li>
         <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
            {{strtoupper(Request::segment($i-1))}}
         </a>
      </li>
   @endfor
</ol>