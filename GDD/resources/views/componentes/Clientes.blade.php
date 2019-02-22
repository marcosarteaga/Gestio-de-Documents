@extends('layouts.master')

@section('content')
<h1>Clientes</h1>
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