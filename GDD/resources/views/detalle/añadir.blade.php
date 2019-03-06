<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	<title>Añadir Cliente</title>
	<style type="text/css">
		.input-group{
			width: 50% !important;
			margin: auto !important;

		}
		.input-bt{
			margin-left: 45%;
		}
	</style>
</head>
<body>
	<?php
	echo "<div class='page-header'><h1 align='center' >Añadir Clientes</h1></div>";

	
	echo "<form method='post' >";
	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
	echo "<input type='text' class='form-control' name='Nombre' placeholder='NOMBRE'><br>";
	echo "</div>";


	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
	echo "<input type='text' name='apellido' class='form-control' placeholder='APELLIDO'><br>";
	echo "</div>";


	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
	echo "<input type='text' name='nif' class='form-control' placeholder='NIF'><br>";
	echo "</div>";


	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>";
	echo "<input type='text' name='email' class='form-control' placeholder='EMAIL'><br>";
	echo "</div>";

	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span>";
	echo "<input type='text' name='telef'  class='form-control' placeholder='TELEFONO'><br>";
	echo "</div>";


	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
	echo "<input type='text' name='direc'  class='form-control' placeholder='DIRECCION'><br>";
	echo "</div>";

	

	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>";
	echo "<input type='text' name='provincia' class='form-control' placeholder='PROVINCIA'><br>";
	echo "</div>";
	
	
	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>";
	echo "<input type='text' name='localidad' class='form-control' placeholder='LOCALIDAD'><br>";
	echo "</div>";


	echo "<div class='input-group'>";
	echo "<span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>";
	echo "<input type='text' name='cp' class='form-control' placeholder='CODIGO POSTAL'><br>";
	echo "</div><br>";
	echo "<div class='input-bt'>";
	echo "<input type='submit' name='btn' class='btn btn-success'>";
	echo "</div>";
	echo "</form>";
	

	?>


</body>

</html>