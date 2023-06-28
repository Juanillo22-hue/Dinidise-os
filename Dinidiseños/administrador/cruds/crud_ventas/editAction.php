<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$cliente = mysqli_real_escape_string($mysqli, $_POST['cliente']);	
	$material = mysqli_real_escape_string($mysqli, $_POST['material']);	
	$pedido = mysqli_real_escape_string($mysqli, $_POST['pedido']);
	$imagen = mysqli_real_escape_string($mysqli, $_POST['imagen']);
	$precio = mysqli_real_escape_string($mysqli, $_POST['precio']);
		
	
	// Check for empty fields
	if (empty($cliente) ||empty($material) ||empty($pedido) || empty($imagen) || empty($precio)) {
		if (empty($cliente)) {
			echo "<font color='red'>material field is empty.</font><br/>";
		}
		if (empty($material)) {
			echo "<font color='red'>material field is empty.</font><br/>";
		}
		if (empty($pedido)) {
			echo "<font color='red'>pedido field is empty.</font><br/>";
		}
		
		if (empty($imagen)) {
			echo "<font color='red'>imagen field is empty.</font><br/>";
		}
		
		if (empty($precio)) {
			echo "<font color='red'>precio field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE ventas SET `cliente` = '$cliente',`material` = '$material', `pedido` = '$pedido', `imagen` = '$imagen', `precio` = '$precio' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Informacion actualizada correctamente</p>";
		echo "<a href='index_ventas.php'>ver resultado</a>";
	}
}
