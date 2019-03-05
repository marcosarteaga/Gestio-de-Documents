@extends('layouts.master')

@section('content')
	 <div class='page-header'><h1 align='center' >Añadir Clientes</h1></div> 

	
	 <form method='post' action="{{URL::asset('detalle/insertar')}}" > 
	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' class='form-control' name='Nombre' placeholder='NOMBRE'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' name='apellido' class='form-control' placeholder='APELLIDO'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' name='nif' class='form-control' placeholder='NIF'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span> 
	 <input type='text' name='email' class='form-control' placeholder='EMAIL'><br> 
	 </div> 

	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span> 
	 <input type='text' name='telef'  class='form-control' placeholder='TELEFONO'><br> 
	 </div> 

	

	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='provincia' class='form-control' placeholder='PROVINCIA'><br> 
	 </div> 
	
	
	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='localidad' class='form-control' placeholder='LOCALIDAD'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='cp' class='form-control' placeholder='CODIGO POSTAL'><br> 
	 </div><br> 
	 <div class='input-bt'> 
	 <input type='submit' name='btn' class='btn btn-success'> 
	 </div> 
	 </form> 
@stop
