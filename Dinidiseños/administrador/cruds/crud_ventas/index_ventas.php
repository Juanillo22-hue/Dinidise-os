<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM ventas ORDER BY id DESC");
?>

<html>
<head>	
	<title>Gestion de Ventas</title>
</head>

<body>
	<h2>Pagina principal de Ventas</h2>
	<p>
		<a href="addView.php">Añadir un nueva Venta</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Material</strong></td>
			<td><strong>Pedido</strong></td>
			<td><strong>Imagen</strong></td>
			<td><strong>Precio</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['material']."</td>";
			echo "<td>".$res['pedido']."</td>";
			echo "<td>".$res['imagen']."</td>";
			echo "<td>".$res['precio']."</td>";
			echo "<td><a href=\"editView.php?id=$res[id]\">Editar</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\">Eliminar</a></td>";
		}
		?>
	</table>
  <br></br>
  <a href="generarExcel.php" class="btn-small blue">Descargar Excel</a>

</body>
</html>
