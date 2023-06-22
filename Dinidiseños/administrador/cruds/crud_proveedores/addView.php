<html>
<head>
	<title>Añadir proveedor</title>
</head>

<body>
	<h2>Añadir Informacion</h2>
	<p>
		<a href="index_proveedores.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Nit</td>
				<td><input type="number" name="nit"></td>
			</tr>
			<tr> 
				<td>Correo</td>
				<td><input type="email" name="correo"></td>
			</tr>
			<tr> 
				<td>Telefono</td>
				<td><input type="number" name="telefono"></td>
			</tr>
			<tr> 
				<td>Productos</td>
				<td><input type="text" name="productos"></td>
			</tr>
			<tr> 
				<td>Pedido</td>
				<td><input type="text" name="pedido"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>
			</tr>
		</table>
	</form>
</body>
</html>

