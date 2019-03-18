@extends('layouts.master')

@section('content')
<!-- Formulario Insert Cliente -->

	 <div class='page-header'><h1 align='center' >Nuevo Cliente</h1></div> 

	 <form method='post' id='form' action('ClientesController@saveClient')>
		 {{csrf_field()}}
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputNombre">Nombre</label>
					<input required type="text" class="form-control" name='Nom' id="inputNombre" placeholder="Nombre">
				</div>
			  	<div class="form-group col-md-6">
					<label for="inputApellidos">Apellidos</label>
					<input required type="text" class="form-control" name='Cognom' id="inputApellidos" placeholder="Apellidos">
			  	</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputNif">NIF</label>
					<input required type="text" class="form-control" name='NIF' id="inputNif" placeholder="NIF">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail">Correo</label>
					<input required type="email" class="form-control" name='Email' id="inputEmail" placeholder="nombre@ejemplo.com">
				</div>
				<div class="form-group col-md-4">
					<label for="inputTel">Telefono</label>
					<input required type="number" class="form-control" name='Telefon' id="inputTel" placeholder="Telefono">
				</div>
			</div>
			<div class="form-group">
					<label for="inputDir">Dirección</label>
					<input required type="text" class="form-control" name='Direccion' id="inputDir" placeholder="Dirección">
			</div>
			<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputPro">Provincia</label>
						<input required type="text" class="form-control" name='Provincia' id="inputPro" placeholder="Provincia">
					</div>
					<div class="form-group col-md-4">
						<label for="inputLoc">Localidad</label>
						<input required type="text" class="form-control" name='Localidad' id="inputLoc" placeholder="Localidad">
					</div>
					<div class="form-group col-md-4">
						<label for="inputCP">CP</label>
						<input required type="number" class="form-control" name='CP' id="inputCP" placeholder="Codigo Postal">
					</div>
				</div>
			<button id="sub" class="btn btn-primary">Añadir</button>
	</form>

@stop
