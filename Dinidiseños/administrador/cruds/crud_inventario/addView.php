<html>
<head>
	<title>Añadir producto</title>
</head>

<body>
	<h2>Añadir Informacion</h2>
	<p>
		<a href="index_inventario.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Cantidad</td>
				<td><input type="number" name="cantidad"></td>
			</tr>
			<tr> 
				<td>Durabilidad</td>
				<td><input type="text" name="durabilidad"></td>
			</tr>
			<tr> 
				<td>precio</td>
				<td><input type="number" name="precio"></td>
			</tr>
			<tr> 
				<td>observacion</td>
				<td><input type="text" name="observacion"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>
			</tr>
		</table>
	</form>
</body>
</html>

