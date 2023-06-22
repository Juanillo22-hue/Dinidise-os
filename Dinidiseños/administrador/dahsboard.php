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

    <title>Dashboard</title>
</head>
<body>
<header class="header">

<div class="nav-container" class=container>
    <img src="../imagenes/Logo-651.png" class="logo">

<a href="#" class="titulo">Dini Diseños</a>
<span class="menu-icon">Ver menu</span>
    <nav class="navigation">

        <ul>
            <li><a href="../inicio.html">Inicio</a> </li>
            <li><a href="#">Diseños</a> </li>
            <li><a href="../php/cerrar_sesion.php">Cerrar sesion</a></li>
            

        </ul>
    </nav>
</div>

</header>
<br>
<br>
<br>



<header class="header2">
<h1>Dasboard</h1>

<div class="navegation2">
</div>

<nav >
     <ul class="linkss"> 
    <li><a href="cruds/crud_gestion_personal/index_gestionP.php">Gestion de personal</a></li>

    <li><a href="cruds/crud_inventario/index_inventario.php">Gestion de inventario</a></li>

    <li><a href="cruds/crud_proveedores/index_proveedores.php">Gestion de proveedores</a></li>

    <li><a href="cruds/crud_ventas/index_ventas.php">Gestion de ventas</a></li>
</ul>
    </nav>

    </header>
    <main class="main">
	 <section class="sec">
      <img src="../imagenes/caja1.jpg" alt="">
      <img src="../imagenes/img1.jpg" alt="">
      <img src="../imagenes/img2.jpg" alt="">
      <img src="../imagenes/img3.jpg" alt="">
      <img src="../imagenes/img4.jpg" alt="">
      <img src="../imagenes/img5.jpg" alt="">
      <img src="../imagenes/img6.jpg" alt="">
      <img src="../imagenes/img7.jpg" alt="">
      <img src="../imagenes/img8.jpg" alt="">
    </section>

 <!-- Fin del Carrusel -->
 <br>
 <br>
    <!-- Categorias 1 -->
    <section class="home-cards">
      <div>
        <img src="../imagenes/folletos.png" alt="">
        <h3>Folletos</h3>
        <p style="text-align:justify;">
          Los folletos publicitarios son una herramienta de marketing efectiva para promocionar tu comercio. 
        </p>
        <a href="">Descubrelos aquí<i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="../imagenes/plotters.png" height="163.64" width="102.98"/>
        <h3>Plotters</h3>
        <p style="text-align:justify;">
          Podras indicarnos tu idea y nosotros la plasmaremos con el fin de que tu espacio se vea mucho mejor.
        </p>
        <a href="">Descubrelos aquí<i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="../imagenes/esferos.jpg" height="163.64" width="102.98"/>
        <h3>Esferos publicitarios</h3>
        <p style="text-align:justify;">
          Con tus esferos personalizados podras darle un toque unico para que tu empresa puedas ser reconocida.
        </p>
        <a href="">Descubrelos aquí<i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="../imagenes/impresionM.jpg" height="163.64" width="102.98" />
        <h3>Impresiones en madera</h3>
        <p style="text-align:justify;">
          Con estas impresiones podras dar un obsequio unico y agradable para esos momentos especiales.
        </p>
        <a href="">Descubrelos aquí<i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

    <!-- Carrusel de imagenes -->
    <section class="sec">
      <img src="../imagenes/posillo1.jfif" alt="">
      <img src="../imagenes/posillo2.jfif" alt="">
      <img src="../imagenes/posillos.jfif" alt="">
      <img src="../imagenes/posillos2.jfif" alt="">
      <img src="../imagenes/vaso.jfif" alt="">
      <img src="../imagenes/vaso2.jfif" alt="">
    </section>

    <!-- Fin del Carrusel -->
  <br>
  <br>
 
      
      <!-- Informacion -->
      <section class="carbon dark">
        <div class="content">
      <br>
      <br>
      <br>
          <p>Si quieres una asesoria personalizada sobre alguno de nuestros productos para tu empresa, regalo
            , ocasión especial o algo mas, no dudes en contactarte y descubrir la gran atencion que tenemos 
            para ti
          </p>
            <a href="" class="btn">
              Contactanos <i class="fas fa-chevron-right"></i>
            </a>
        </div>
      </section>

      <!-- Redes sociales -->
      <section class="follow">
        <p>Siguenos en nuestras redes sociales</p>
        <a href="https://facebook.com">
          <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
        </a>
        <a href="https://twitter.com">
          <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
        </a>
        <a href="https://linkedin.com">
          <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
        </a>
      </section>
    
      <!-- Links -->
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


</body>
</html>