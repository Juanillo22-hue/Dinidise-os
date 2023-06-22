<html>
<head>
	<title>Añadir venta</title>
</head>

<body>
	<h2>Añadir venta</h2>
	<p>
		<a href="index_ventas.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Material</td>
				<td><input type="text" name="material"></td>
			</tr>
			<tr> 
				<td>Pedido</td>
				<td><input type="text" name="pedido"></td>
			</tr>
			<tr> 
				<td>Imagen</td>
				<td><input type="file" name="imagen"></td>
			</tr>
			<tr> 
				<td>Precio</td>
				<td><input type="number" name="precio"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>
			</tr>
		</table>
	</form>
</body>
</html>

