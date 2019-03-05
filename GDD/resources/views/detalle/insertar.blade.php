<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	$conn = mysqli_connect('localhost','xus','xus123');
	mysqli_select_db($conn, 'Gestion');
	$nombre=$_POST["Nombre"];
	$apellido=$_POST["apellido"];
	$nif=$_POST["nif"];
	$mail=$_POST["email"];
	$telefono=$_POST["telef"];
	$provincia=$_POST["provincia"];
	$localidad=$_POST["localidad"];
	$codigop=$_POST["cp"];

	$insert="INSERT INTO clientes (Nom, Cognom, Email, Telefon, NIF,Provincia,Localidad,CP  VALUES ($nombre, $apellido, $nif,$mail,$telefono,$provincia,$localidad,$codigop)";
	$resultatem = mysqli_query($conn, $insert);
	echo "hola estoy intentado insertar";
		


	?>

</body>

</html>