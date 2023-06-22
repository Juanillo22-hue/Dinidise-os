<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio sesion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/sesion.css">
    
</head>
<body  >
    
    <div  class="container">
           <div class="form sign-up-container">
              <h1>REGISTRARSE</h1>
              <form action="register_db.php" method="POST" class="formulario">
                <input class="fas fa-key icon" type="text" placeholder="nombre" name="nombre" id="name">
            
                <input class="fas fa-envelope icon" type="email" placeholder="email" name="email" id="email"> 
            
                <input class="fas fa-key icon" type="password" placeholder="contrasena" name="password" id="password">
             
                <input  class="fas fa-key icon" type="submit" value="REGISTRARSE"> 
                <a class="ok-account">¿Ya tienes una cuenta?</a>
                <a href="../inicio.html">Volver a Inicio</a>
                </form>
           </div>

           <div class="form sign-in-container">
            <h1>Iniciar Sesion</h1>
            <form class="formulario2">
            
              <input class="fas fa-key icon" type="email" placeholder="email" id="email2"> 
              <input class="fas fa-key icon" type="password" placeholder="contrasena" id="password2">
              <!--<input  class="fas fa-key icon" type="submit" value="Iniciar sesion"> -->
              <a class="no-account">¿Aun no tienes cuenta?</a> 
              <a href="../inicio.html">Volver a Inicio</a>
            </form>
            <a href="../administrador/dahsboard.php" class="fas fa-key icon"> iniciar sesion</a>
        
         </div>
    </div>
    <p class="notify check_notify">¡TE REGISTRASTE CORRECTAMENTE!</p>
    <p class="notify error_notify">¡UPA, OCURRIO UN ERROR, VERIFICA TUS DATOS!</p>

    <script src="../js/script.js"></script>
</body>
</html>