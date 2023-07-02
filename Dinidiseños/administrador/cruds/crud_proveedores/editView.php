<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM proveedores WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nombre = $resultData['nombre'];
$nit = $resultData['nit'];
$correo = $resultData['correo'];
$telefono = $resultData['telefono'];
$productos = $resultData['productos'];
$pedido = $resultData['pedido'];
?>
<html>
<head>	
	<title>Editar Informacion</title>
</head>

<body>
    <h2>Editar informacion de los proveedores</h2>
    <p>
	    <a href="index_proveedores.php">Inicio</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr> 
				<td>Nit</td>
				<td><input type="number" name="nit" value="<?php echo $nit; ?>"></td>
			</tr>
			<tr> 
				<td>Correo</td>
				<td><input type="email" name="correo" value="<?php echo $correo; ?>"></td>
			</tr>
			<tr> 
				<td>Telefono</td>
				<td><input type="number" name="telefono" value="<?php echo $telefono; ?>"></td>
			</tr>
			<tr> 
				<td>Productos</td>
				<td><input type="text" name="productos" value="<?php echo $productos; ?>"></td>
			</tr>
			<tr> 
				<td>Pedido</td>
				<td><input type="text" name="pedido" value="<?php echo $pedido; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
