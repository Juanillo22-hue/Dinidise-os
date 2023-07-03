<?php
require_once("../../dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM inventario WHERE id = $id");

$resultData = mysqli_fetch_assoc($result);

$nombre = $resultData['nombre'];
$cantidad = $resultData['cantidad'];
$durabilidad = $resultData['durabilidad'];
$precio = $resultData['precio'];
$observacion = $resultData['observacion'];
?>
<html>
<head>	
	<title>Editar Informacion</title>
	<link rel="stylesheet" type="text/css" href="../../../css/edit_personal.css">

</head>

<body>
<header class="header">
		<div class="container1">
		<div class="btn-menu">
		</div>
			<div class="logo">
				<h1>Dinidiseños</h1>
			</div>
			<nav class="menus">
				<a href="../../../inicio.html">Inicio</a>
				<a href="../../../404/404.html">Nosotros</a>
				<a href="../../../404/404.html">Contacto</a>
				<a href="../../../php/cerrar_sesion.php">Cerrar sesion</a>

			</nav>
		</div>
	</header>
	<main>
		<div class="tabla">
    <h2>Editar informacion de los productos</h2>
   
	<form name="edit" method="post" action="editAction.php">
		<table >
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr> 
				<td>Cantidad</td>
				<td><input type="number" name="cantidad" value="<?php echo $cantidad; ?>"></td>
			</tr>
			<tr> 
				<td>Durabilidad</td>
				<td><input type="text" name="durabilidad" value="<?php echo $durabilidad; ?>"></td>
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
</div>
</main>
<footer class="footer">
		  <img src="../../../imagenes/Logo-651.png" class="footer_logo">

          <div class="footer_titulo">

              <p>Dinera diseños 2023</p>
          </div>

      </footer>

</body>
</html>
