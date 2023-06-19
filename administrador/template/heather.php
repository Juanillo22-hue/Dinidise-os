<?php session_start();


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php $url="http://".$_SERVER['HTTP_HOST']."/Paginaphp" ?>
  <?php $url2="http://".$_SERVER['HTTP_HOST']."/Paginaphp/administrador/inicio.php" ?>
  <?php $url3="http://".$_SERVER['HTTP_HOST']."/Paginaphp/administrador/seccion/productos.php" ?>
  <?php $url4="http://".$_SERVER['HTTP_HOST']."/Paginaphp/administrador/seccion/cerrar.php" ?>

   <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sistema <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url2;?>">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url3;?>">Libros</a>
            <a class="nav-item nav-link" href="<?php echo $url4;?>">Cerrar sesion</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
        </div>
    </nav>
      <div class="container">
        <div class="row">