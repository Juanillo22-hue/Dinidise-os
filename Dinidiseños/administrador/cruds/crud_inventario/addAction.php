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
	$cantidad = mysqli_real_escape_string($mysqli, $_POST['cantidad']);
	$durabilidad = mysqli_real_escape_string($mysqli, $_POST['durabilidad']);
	$precio = mysqli_real_escape_string($mysqli, $_POST['precio']);
	$observacion = mysqli_real_escape_string($mysqli, $_POST['observacion']);
		
	// Check for empty fields
	if (empty($nombre) || empty($cantidad) || empty($durabilidad)|| empty($precio)) {
		if (empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($cantidad)) {
			echo "<font color='red'>cantidad field is empty.</font><br/>";
		}
		if (empty($durabilidad)) {
			echo "<font color='red'>precio field is empty.</font><br/>";
		}
		if (empty($precio)) {
			echo "<font color='red'>precio field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO inventario (`nombre`, `cantidad`,`durabilidad`, `precio`, `observacion` ) VALUES ('$nombre', '$cantidad','$durabilidad', '$precio', '$observacion')");
		
		// Display success message
		echo "<p><font color='green'>Informacion añadida satisfactoriamente</p>";
		echo "<a href='index_inventario.php'>Ver Resultado</a>";
	}
}
?>
</body>
</html>
