<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$tipodocumento = mysqli_real_escape_string($mysqli, $_POST['tipodocumento']);
	$numerodocumento = mysqli_real_escape_string($mysqli, $_POST['numerodocumento']);
	$correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
	$telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
	
	// Check for empty fields
	if (empty($nombre) || empty($apellido) || empty($correo)) {
		if (empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($apellido)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($correo)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `nombre` = '$nombre', `apellido` = '$apellido', `tipodocumento` = '$tipodocumento', `numerodocumento` = '$numerodocumento', `correo` = '$correo', `telefono` = '$telefono' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Informacion actualizada correctamente</p>";
		echo "<a href='index_gestionP.php'>ver resultado</a>";
	}
}
