<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE proveedores SET `nombre` = '$nombre', `nit` = '$nit', `correo` = '$correo', `telefono` = '$telefono', `productos` = '$productos',`pedido` = '$pedido' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Informacion actualizada correctamente</p>";
		echo "<a href='index_proveedores.php'>ver resultado</a>";
	}
}
