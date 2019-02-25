@extends('layouts.master')

@section('content')
<h1>Clientes</h1>
<img style="left:right;" height="5%" width="5%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzauaghT7_ny88d8mB8PhVBeKmR7OHxpRynskzQNuvnY5ymueAvQ">
<ul class="list-group">
   @foreach( $arrayClientes as $key => $Cliente )
    <li class="list-group-item">
        <a href="#"><!--{{ URL::asset('/catalog/show/'.$Cliente->id) }}-->
            <h5>
                {{$Cliente->Nom}}
            </h5>
        </a>
    </li>
    @endforeach

</ul>
	
@stop