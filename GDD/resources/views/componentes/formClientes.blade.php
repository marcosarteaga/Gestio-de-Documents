@extends('layouts.master')

@section('content')
	 <div class='page-header'><h1 align='center' >Añadir Clientes</h1></div> 

	
	 <form method='post' action='/' > 
	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' class='form-control' name='Nom' placeholder='NOMBRE'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' name='Cognom' class='form-control' placeholder='APELLIDO'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span> 
	 <input type='text' name='NIF' class='form-control' placeholder='NIF'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span> 
	 <input type='text' name='Email' class='form-control' placeholder='EMAIL'><br> 
	 </div> 

	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span> 
	 <input type='text' name='Telefon'  class='form-control' placeholder='TELEFONO'><br> 
	 </div> 

	 <div class='input-group'>
	 <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>
	 <input type='text' name='Direccion'  class='form-control' placeholder='DIRECCION'><br>
	 </div>

	

	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='Provincia' class='form-control' placeholder='PROVINCIA'><br> 
	 </div> 
	
	
	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='Localidad' class='form-control' placeholder='LOCALIDAD'><br> 
	 </div> 


	 <div class='input-group'> 
	 <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span> 
	 <input type='text' name='CP' class='form-control' placeholder='CODIGO POSTAL'><br> 
	 </div><br> 

	 <div class='input-group'>
     <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
     <input id='dataModificacio' type='date' class='form-control' name='updated_at' placeholder='Data Modificació'>
     </div>


     <div class='input-group'>
     <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
     <input id='dataModificacio' type='date' class='form-control' name='created_at' placeholder='Data Modificació'>
     </div>




	 <div class='input-bt'> 
	 <input type='submit' name='btn' class='btn btn-success'> 
	 </div> 
	 </form> 
@stop
