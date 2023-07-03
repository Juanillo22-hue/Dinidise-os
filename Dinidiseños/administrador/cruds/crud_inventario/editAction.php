<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE inventario SET `nombre` = '$nombre', `cantidad` = '$cantidad',`durabilidad` = '$durabilidad', `precio` = '$precio', `observacion` = '$observacion' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Informacion actualizada correctamente</p>";
		echo "<a href='index_inventario.php'>ver resultado</a>";
	}
}
