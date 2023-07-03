<?php
require_once("../../dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

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
	<link rel="stylesheet" type="text/css" href="../../../css/edit_personal.css">
	
</head>
<title>Dashboard</title>
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
    <h2>Editar informacion de los usuarios</h2>
  
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
				<td><a><input type="submit" name="update" value="Actualizar"></a></td>
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
