<?php
   session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "../php/sesion.php";
            </script>
        ';
        session_destroy();
        die(); 
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../../css/inventario.css">
	<link rel="stylesheet" type="text/css" href="../../../css/fontello.css">


  
  
    <title>Dashboard</title>
</head>
<body>
<header class="header">
		<div class="container1">
		<div class="btn-menu">
			<label for="btn-menu" class="icon-menu"></label>
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
  <div class="capa"></div>
  <input type="checkbox" id="btn-menu">

<!--menu lateral-->
<div class="lateral" >
<div class="nav-container">
    <img src="../../../imagenes/Logo-651.png" class="logo">
<a href="#" class="titulo">Dashboard</a>
<span class="menu-icon">Ver menu</span>
    <nav class="navegation">
        <ul > 
    <li><a href="../../dahsboard.php">Gestion de personal</a></li>

    <li><a href="#">Gestion de inventario</a></li>

    <li><a href="../crud_proveedores/index_proveedores.php">Gestion de proveedores</a></li>

    <li><a href="../cruds/crud_ventas/index_ventas.php">Gestion de ventas</a></li>
</ul>
<label for="btn-menu" class="icon-cancel-circled"></label>

  </nav>
</div>

  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<!--fin de encabezado-->

<?php
require_once("../../dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM inventario ORDER BY Id DESC");
?>

<html>
<head>	
	<title>Gestion del inventario</title>
</head>

<body>
<div class="container_dashboard">
<h3>Gestion inventario</h3>

<table class="tabla">

		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Cantidad</strong></td>
			<td><strong>Durabilidad</strong></td>
			<td><strong>Precio</strong></td>
			<td><strong>Observacion</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['cantidad']."</td>";
			echo "<td>".$res['durabilidad']."</td>";
			echo "<td>".$res['precio']."</td>";
			echo "<td>".$res['observacion']."</td>";
			echo "<td><a class='icon-pencil-squared'href=\"editView.php?id=$res[id]\">Editar</a>";
			echo "<a class='icon-bote' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\"></a></td>";
		}
		?>
	</table>
  <div class="excel">
  <ul>

  <li><label for="añadir" class="box">Añadir un nuevo producto</label></li>

  <li><a class="box"href="generarExcel.php" class="btn-small blue">Descargar Excel</a></li>
	</ul>
	<input type="checkbox" id="añadir">
	<div class="usuario">
		<div class="añadir">
  <label for="añadir" class="icon-cancel-circled"></label>
	</div>

	<h2>Añadir Informacion</h2>
	<form action="addAction.php" method="post" name="add">
		<table width>
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
  </div>

	</div>
<br>
<br>
<br>
<br>

   <!--footer-->
   
      
      
   <footer class="footer">
		  <img src="../../../imagenes/Logo-651.png" class="footer_logo">

          <div class="footer_titulo">

              <p>Dinera diseños 2023</p>
          </div>

      </footer>


 
</body>
</html>

</body>
</html>
