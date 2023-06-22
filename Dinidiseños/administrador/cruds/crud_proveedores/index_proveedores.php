<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM proveedores ORDER BY id DESC");
?>

<html>
<head>	
	<title>Gestion del Proveedores</title>
</head>

<body>
	<h2>Pagina principal de inventario</h2>
	<p>
		<a href="addView.php">Añadir un nuevo proveedor</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nombre</strong></td>
			<td><strong>Nit</strong></td>
			<td><strong>Correo</strong></td>
			<td><strong>Telefono</strong></td>
			<td><strong>Productos</strong></td>
			<td><strong>Pedidos</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['nit']."</td>";
			echo "<td>".$res['correo']."</td>";
			echo "<td>".$res['telefono']."</td>";
			echo "<td>".$res['productos']."</td>";
			echo "<td>".$res['pedido']."</td>";
			echo "<td><a href=\"editView.php?id=$res[id]\">Editar</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\">Eliminar</a></td>";
		}
		?>
	</table>
  <br></br>
  <a href="generarExcel.php" class="btn-small blue">Descargar Excel</a>

</body>
</html>
