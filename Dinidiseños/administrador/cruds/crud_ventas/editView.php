<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ventas WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$cliente = $resultData['cliente'];
$material = $resultData['material'];
$pedido = $resultData['pedido'];
$imagen = $resultData['imagen'];
$precio = $resultData['precio'];
?>
<html>
<head>	
	<title>Editar Informacion</title>
</head>

<body>
    <h2>Editar informacion de los proveedores</h2>
    <p>
	    <a href="index_ventas.php">Inicio</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Cliente</td>
				<td><input type="text" name="cliente" value="<?php echo $cliente; ?>"></td>
			</tr>
			<tr> 
				<td>Material</td>
				<td><input type="text" name="material" value="<?php echo $material; ?>"></td>
			</tr>
			<tr> 
				<td>Pedido</td>
				<td><input type="text" name="pedido" value="<?php echo $pedido; ?>"></td>
			</tr>
			<tr> 
				<td>Imagen</td>
				<td><input type="file" name="imagen" value="<?php echo $imagen; ?>"></td>
			</tr>
			<tr> 
				<td>Precio</td>
				<td><input type="number" name="precio" value="<?php echo $precio; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
