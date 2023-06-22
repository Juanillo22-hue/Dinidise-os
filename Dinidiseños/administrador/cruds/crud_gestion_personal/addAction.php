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
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$tipodocumento = mysqli_real_escape_string($mysqli, $_POST['tipodocumento']);
	$numerodocumento = mysqli_real_escape_string($mysqli, $_POST['numerodocumento']);
	$correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
	$telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
		
	// Check for empty fields
	if (empty($nombre) || empty($apellido) || empty($tipodocumento)) {
		if (empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($apellido)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($tipodocumento)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`nombre`, `apellido`, `tipodocumento`, `numerodocumento`, `correo`, `telefono` ) VALUES ('$nombre', '$apellido', '$tipodocumento', '$numerodocumento', '$correo', '$telefono')");
		
		// Display success message
		echo "<p><font color='green'>Informacion añadida satisfactoriamente</p>";
		echo "<a href='index_gestionP.php'>Ver Resultado</a>";
	}
}
?>
</body>
</html>
