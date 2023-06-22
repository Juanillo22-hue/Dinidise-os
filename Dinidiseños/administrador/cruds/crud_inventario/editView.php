<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM inventario WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nombre = $resultData['nombre'];
$cantidad = $resultData['cantidad'];
$precio = $resultData['precio'];
$observacion = $resultData['observacion'];
?>
<html>
<head>	
	<title>Editar Informacion</title>
</head>

<body>
    <h2>Editar informacion de los productos</h2>
    <p>
	    <a href="index_inventario.php">Inicio</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr> 
				<td>Cantidad</td>
				<td><input type="number" name="cantidad" value="<?php echo $cantidad; ?>"></td>
			</tr>
			<tr> 
				<td>Precio</td>
				<td><input type="number" name="precio" value="<?php echo $precio; ?>"></td>
			</tr>
			<tr> 
				<td>Observacion</td>
				<td><input type="text" name="observacion" value="<?php echo $observacion; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
