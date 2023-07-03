<?php
require_once("../../dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM proveedores WHERE id = $id");

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
    <h2>Editar informacion de los proveedores</h2>
 
	
	<form name="edit" method="post" action="editAction.php">
		<table >
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
