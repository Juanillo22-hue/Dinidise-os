<?php
// Include the database connection file
require_once("../../dbConnection.php");

// Fetch data in 3descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Gestion del personal</title>
	<link rel="stylesheet" type="text/css" href="../../../css/gestion_personal.css">

</head>

<body>
<header class="header">

<div class="nav-container" class=container>
    <img src="../../../imagenes/Logo-651.png" class="logo">

<a href="#" class="titulo">Dini Diseños</a>
<span class="menu-icon">Ver menu</span>
    <nav class="navigation">

        <ul>
            <li><a href="../../../inicio.html">Inicio</a> </li>
            <li><a href="#">Diseños</a> </li>
            <li><a href="../php/cerrar_sesion.php">Cerrar sesion</a></li>
            

        </ul>
    </nav>
</div>

</header>
<br>
<br>
<br>
<br>
<main>
	<h2>Gestion del personal</h2>
	<br>
	<div class="container"> 

	<table class="tabla">
		<tr>
			<thead>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
      <td><strong>Rh</strong></td>
			<td><strong>Tipo de documento</strong></td>
			<td><strong>Numero de documento</strong></td>
			<td><strong>Correo Electronico</strong></td>
			<td><strong>Telefono</strong></td>
      <td><strong>Observacion</strong></td>
</thead>
	
		</tr>

</div>
		<?php
		// Fetch the next row of a result set as an associative array
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
			echo "<td><a href=\"editView.php?id=$res[id]\">Editar</a></td>";
			echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estas seguro que deseas elminar el usuario?')\">Eliminar</a></td>";
			
		}
		?>
	</table>
  <br>
  <div class="excel">
  <ul>
  <li><a href="addView.php">Añadir un nuevo usuario</a></li>
  <li><a href="generarExcel.php" class="btn-small blue">Descargar Excel</a></li>
	</div>
</ul>
	</main>
<br>
<br>

<br>
<br>
<br>

<section class="links">
        <div class="links-inner">
          <ul>
            <li><h3>Compañia</h3></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Politicas de Privacidad</a></li>
            <li><a href="#">Tratamiento de datos</a></li>
          </ul>
        </div>
      </section>
      </main>
      <footer class="footer">
          <div class="container">
              <p>Dinera diseños 2023</p>
          </div>

      </footer>


  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="js/inicio.js"></script>
       
</body>
</html>
