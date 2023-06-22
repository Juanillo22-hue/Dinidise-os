<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Fetch data in 3descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Gestion del personal</title>
</head>

<body>
	<h2>Pagina principal de gestion del personal</h2>
	<p>
		<a href="addView.php">Añadir un nuevo usuario</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Tipo de documento</strong></td>
			<td><strong>Numero de documento</strong></td>
			<td><strong>Correo Electronico</strong></td>
			<td><strong>Telefono</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['tipodocumento']."</td>";
			echo "<td>".$res['numerodocumento']."</td>";
			echo "<td>".$res['correo']."</td>";	
			echo "<td>".$res['telefono']."</td>";
			echo "<td><a href=\"editView.php?id=$res[id]\">Editar</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\">Eliminar</a></td>";
		}
		?>
	</table>
  <br></br>
  <a href="generarExcel.php" class="btn-small blue">Descargar Excel</a>

</body>
</html>
