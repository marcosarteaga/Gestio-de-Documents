<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	$conn = mysqli_connect('localhost','xus','xus123');
	mysqli_select_db($conn, 'Gestion');
	INSERT INTO table_name (column1, column2, column3, ...)
	VALUES (value1, value2, value3, ...);
	$resultatem = mysqli_query($conn, $update);
	header("Location:index.php");	


	?>

</body>
</html>