<?php 
     include 'conexion_db.php';

     $nombre_usuario = $_POST['nombre'];
     $correo = $_POST['email'];
     $contrasena = $_POST['password'];

     $query ="INSERT INTO usuarios(nombre,email,pass) 
              VALUES('$nombre_usuario','$correo','$contrasena')";

    $check_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");

   
    if(mysqli_num_rows($check_email) > 0){
        echo'
           <script>
                alert("ESTE CORREO YA ESTA EN USO");
                window.location = "../index.php";
           </script>
                 
        
        ';

        exit();
    }
    

    $ejecutar = mysqli_query($conexion,$query);
    
    if ($ejecutar) {
        echo'
          <script>
            alert("Usuario registrado correctamente");
          </script> 
        ';
    } else {
        echo '
          <script>
            alert("No se logro registrar, intente de nuevo");
            window.location =sesion.php";
        </script>
        '; 
    }



    mysqli_close($conexion);

?>