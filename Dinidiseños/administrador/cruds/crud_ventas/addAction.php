<html>
<head>
	<title>Añadir venta</title>
</head>

<body>
<?php
// Include the database connection file
require_once("../../dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement
	$material = mysqli_real_escape_string($mysqli, $_POST['material']);	
	$pedido = mysqli_real_escape_string($mysqli, $_POST['pedido']);
	$imagen = mysqli_real_escape_string($mysqli, $_POST['imagen']);
	$precio = mysqli_real_escape_string($mysqli, $_POST['precio']);
	// Check for empty fields
	if (empty($material) ||empty($pedido) || empty($imagen) || empty($precio)) {
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
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO ventas (`material`,`pedido`, `imagen`, `precio`) VALUES ('$material','$pedido', '$imagen', '$precio')");
		
		// Display success message
		echo "<p><font color='green'>Informacion añadida satisfactoriamente</p>";
		echo "<a href='index_ventas.php'>Ver Resultado</a>";
	}
}
?>
</body>
</html>
