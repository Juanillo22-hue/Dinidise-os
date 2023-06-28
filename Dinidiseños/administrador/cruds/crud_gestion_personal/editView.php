<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nombre = $resultData['nombre'];
$apellido = $resultData['apellido'];
$rh = $resultData['rh'];
$tipodocumento = $resultData['tipodocumento'];
$numerodocumento = $resultData['numerodocumento'];
$correo = $resultData['correo'];
$telefono = $resultData['telefono'];
$observacion = $resultData['observacion'];
$area = $resultData['area'];
?>
<html>
<head>	
	<title>Editar Informacion</title>
</head>

<body>
    <h2>Editar informacion de los usuarios</h2>
    <p>
	    <a href="index_gestionP.php">Inicio</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido" value="<?php echo $apellido; ?>"></td>
			</tr>
			<tr> 
				<td>Rh</td>
				<td><input type="text" name="rh" value="<?php echo $rh; ?>"></td>
			</tr>
			<tr> 
				<td>Tipo de documetno</td>
				<td><input type="text" name="tipodocumento" value="<?php echo $tipodocumento; ?>"></td>
			</tr>
			<tr> 
				<td>Numero de documento</td>
				<td><input type="number" name="numerodocumento" value="<?php echo $numerodocumento; ?>"></td>
			</tr>
			<tr> 
				<td>Correo electronico</td>
				<td><input type="email" name="correo" value="<?php echo $correo; ?>"></td>
			</tr>
			<tr> 
				<td>Telefono</td>
				<td><input type="number" name="telefono" value="<?php echo $telefono; ?>"></td>
			</tr>
			<tr> 
				<td>Observacion</td>
				<td><input type="text" name="observacion" value="<?php echo $observacion; ?>"></td>
			</tr>
			<tr> 
				<td>Area</td>
				<td><input type="text" name="area" value="<?php echo $area; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
