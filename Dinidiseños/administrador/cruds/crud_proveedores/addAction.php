<html>
<head>
	<title>Añadir Informacion</title>
</head>

<body>
<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$nit = mysqli_real_escape_string($mysqli, $_POST['nit']);
	$correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
	$telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
	$productos = mysqli_real_escape_string($mysqli, $_POST['productos']);
	$pedido = mysqli_real_escape_string($mysqli, $_POST['pedido']);
		
	// Check for empty fields
	if (empty($nombre) || empty($nit) || empty($correo)|| empty($telefono)|| empty($productos)|| empty($pedido)) {
		if (empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($nit)) {
			echo "<font color='red'>nit field is empty.</font><br/>";
		}
		
		if (empty($correo)) {
			echo "<font color='red'>correo field is empty.</font><br/>";
		}
		if (empty($telefono)) {
			echo "<font color='red'>telefono field is empty.</font><br/>";
		}
		if (empty($productos)) {
			echo "<font color='red'>productos field is empty.</font><br/>";
		}
		if (empty($pedido)) {
			echo "<font color='red'>pedido field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO proveedores (`nombre`, `nit`, `correo`, `telefono` , `productos`, `pedido` ) VALUES ('$nombre', '$nit', '$correo','$telefono','$productos','$pedido' )");
		
		// Display success message
		echo "<p><font color='green'>Informacion añadida satisfactoriamente</p>";
		echo "<a href='index_proveedores.php'>Ver Resultado</a>";
	}
}
?>
</body>
</html>
