<html>
<head>
	<title>Añadir Usuario</title>
</head>

<body>
	<h2>Añadir Informacion</h2>
	<p>
		<a href="index_gestionP.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr> 
				<td>Tipo de documento</td>
				<td><input type="text" name="tipodocumento"></td>
			</tr>
			<tr> 
				<td>Numero de documento</td>
				<td><input type="number" name="numerodocumento"></td>
			</tr>
			<tr> 
				<td>Correo Electronico</td>
				<td><input type="email" name="correo"></td>
			</tr>
			<tr> 
				<td>Telefono</td>
				<td><input type="number" name="telefono"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>
			</tr>
		</table>
	</form>
</body>
</html>

