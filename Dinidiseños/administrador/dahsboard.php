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
	<link rel="stylesheet" type="text/css" href="../css/dasboard.css">
	<link rel="stylesheet" type="text/css" href="../css/fontello.css">
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
				<a href="../inicio.html">Inicio</a>
				<a href="../404/404.html">Nosotros</a>
				<a href="../404/404.html">Contacto</a>
				<a href="../php/cerrar_sesion.php">Cerrar sesion</a>

			</nav>
		</div>
	</header>
  <div class="capa"></div>
  <input type="checkbox" id="btn-menu">

<!--menu lateral-->
<div class="lateral" >
<div class="nav-container">
    <img src="../imagenes/Logo-651.png" class="logo">
<a href="#" class="titulo">Dashboard</a>
<span class="menu-icon">Ver menu</span>
    <nav class="navegation">
        <ul > 
    <li><a href="#">Gestion de personal</a></li>

    <li><a href="cruds/crud_inventario/index_inventario.php">Gestion de inventario</a></li>

    <li><a href="cruds/crud_proveedores/index_proveedores.php">Gestion de proveedores</a></li>

    <li><a href="cruds/crud_ventas/index_ventas.php">Gestion de ventas</a></li>
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


<main >
    <?php
require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>


<div class="container_dashboard">
	<h1>Gestion de personal</h1>
	
	

	<table class="tabla">
		<tr>
			<thead >
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
      <td><strong>Rh</strong></td>
			<td><strong>Tipo de documento</strong></td>
			<td><strong>Numero de documento</strong></td>
			<td><strong>Correo Electronico</strong></td>
			<td><strong>Telefono</strong></td>
      <td><strong>Observacion</strong></td>
      <td><strong>Area</strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>

      </thead>
	   </tr>
   
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
      echo "<td>".$res['rh']."</td>";
			echo "<td>".$res['tipodocumento']."</td>";
			echo "<td>".$res['numerodocumento']."</td>";
			echo "<td>".$res['correo']."</td>";	
			echo "<td>".$res['telefono']."</td>";
      echo "<td>".$res['observacion']."</td>";
      echo "<td>".$res['area']."</td>";
 
			echo " <td ><a class='icon-pencil-squared' href=\"cruds/crud_gestion_personal/editView.php?id=$res[id]\">Editar</a></td>";
			echo "<td><a class='icon-bote'href=\"cruds/crud_gestion_personal/delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\"></a></td>";
			}

		?>


	</table>
  
  </div>

  
  <div class="excel">
  <ul>
  <li><label for="añadir" class="box" >Añadir un nuevo usuario</label></li>
  <li><a class="box"href="cruds/crud_gestion_personal/generarExcel.php">Descargar Excel</a></li>
 </ul>
    </div>
 <input type="checkbox" id="añadir">

  <div class="usuario">
    <div class="añadir">
  <label for="añadir" class="icon-cancel-circled"></label>
    </div>
  <h2>Nuevo Usuario</h2>

	<form action="cruds/crud_gestion_personal/addAction.php" method="post" name="add">
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
				<td>Rh</td>
				<td><input type="text" name="rh"></td>
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
				<td>Observacion</td>
				<td><input type="text" name="observacion"></td>
			</tr>
			<tr> 
				<td>Area</td>
				<td><input type="text" name="area"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Añadir"></td>

			</tr>
      
		</table>
    
	</form>

	
    </div>
  </div>
	</main>

<br>
<br>
<br>
<br>
<br>

      

      <!--footer-->
   
      
      
      <footer class="footer">
		  <img src="../imagenes/Logo-651.png" class="footer_logo">

          <div class="footer_titulo">

              <p>Dinera diseños 2023</p>
          </div>

      </footer>


 
</body>
</html>
