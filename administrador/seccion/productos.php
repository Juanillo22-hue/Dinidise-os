<?php include("../template/heather.php") ?>  

<?php 


 $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
 $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
 $txtImagen=(isset($_FILES['txtImagen']))?$_FILES['txtImagen']['name']:"";
 $accion=(isset($_POST['accion']))?$_POST['accion']:"";

 include("../config/bd.php");

 switch($accion){
    case"Agregar":
        //INSERT INTO `libros` (`Id`, `Nombre`, `Imagen`) VALUES (NULL, 'Libro php', 'Imagen.jpg');
        $sentenciaSQL = $conexion->prepare("INSERT INTO libros (Nombre,Imagen) VALUES (:Nombre, :Imagen);");
        $sentenciaSQL->bindParam(':Nombre',$txtNombre);

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];  
        
        if($tmpImagen!=""){
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }
        
        $sentenciaSQL->bindParam(':Imagen',$nombreArchivo);
        $sentenciaSQL-> execute();
        header("Lacation:productos.php");
        //echo "Presionado boton Agregar";
        break;
    case"Modificar":
        $sentenciaSQL = $conexion->prepare("UPDATE Libros SET Nombre=:Nombre WHERE Id=:Id");
        $sentenciaSQL->bindParam(':Nombre',$txtNombre);
        $sentenciaSQL->bindParam(':Id',$txtID);
        $sentenciaSQL-> execute();

        if($txtImagen!=""){

            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo); 
            
            $sentenciaSQL = $conexion->prepare("SELECT Imagen FROM Libros WHERE Id=:Id");
            $sentenciaSQL->bindParam(':Id',$txtID);
            $sentenciaSQL-> execute();
            $libro= $sentenciaSQL ->fetch(PDO::FETCH_LAZY);

            if(isset($libro["Imagen"]) &&($libro["Imagen"]!="imagen.jpg")){
            if(file_exists("../../img/".$libro["Imagen"])){
                unlink("../../img/".$libro["Imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE Libros SET Imagen=:Imagen WHERE Id=:Id");
            $sentenciaSQL->bindParam(':Imagen',$nombreArchivo);
            $sentenciaSQL->bindParam(':Id',$txtID);
            $sentenciaSQL-> execute();
        }
        header("Lacation:productos.php");
        //echo "Presionado boton Modificar";
        break;
     case"Cancelar":
        header("Lacation:productos.php");
        break;
    case"Seleccionar":
        $sentenciaSQL = $conexion->prepare("SELECT * FROM Libros WHERE Id=:Id");
        $sentenciaSQL->bindParam(':Id',$txtID);
        $sentenciaSQL-> execute();
        $libro= $sentenciaSQL ->fetch(PDO::FETCH_LAZY);
        $txtNombre=$libro['Nombre'];
        $txtImagen=$libro['Imagen'];
        //echo "Presionado boton Seleccionar";
        break;
    case"Borrar":

        $sentenciaSQL = $conexion->prepare("SELECT Imagen FROM Libros WHERE Id=:Id");
        $sentenciaSQL->bindParam(':Id',$txtID);
        $sentenciaSQL-> execute();
        $libro= $sentenciaSQL ->fetch(PDO::FETCH_LAZY);

        if(isset($libro["Imagen"]) &&($libro["Imagen"]!="imagen.jpg")){
            if(file_exists("../../img/".$libro["Imagen"])){
                unlink("../../img/".$libro["Imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM libros WHERE Id=:Id");
        $sentenciaSQL->bindParam(':Id',$txtID);
        $sentenciaSQL->execute();
        header("Lacation:productos.php");
        //echo "Presionado boton Borrar"; */
        break;    
 }

 $sentenciaSQL = $conexion->prepare("SELECT * FROM Libros");
 $sentenciaSQL-> execute();
 $listaLibros= $sentenciaSQL ->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de Libro
    </div>

    <div class="card-body">

    <form method="POST" enctype="multipart/form-data" >
    
    <div class = "form-group">
    <label for="txtID">ID</label>
    <input type="text" required readonly class="form-control" value="<?php echo  $txtID ?>" name="txtID" id="txtID"  placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre</label>
    <input type="text" required class="form-control" value="<?php echo  $txtNombre ?>" name="txtNombre" id="txtNombre"  placeholder="Nombre">
    </div>

    <div class = "form-group"> 
    <label for="txtImagen">Imagen</label>  

    <?php echo $txtImagen; ?>

    <?php if($txtImagen!=""){ ?>

        <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen;?>"width="50" alt="" srcset="">
            
       <?php }?>

    <input type="file" class="form-control" value="<?php echo  $txtImagen ?>" name="txtImagen" id="txtImagen"  placeholder="ID">
    </div>

    
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":"";?> value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Modificar"  class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>

    </form>

    </div>
    

    
    </div>

    

</div>

<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLibros as $Libro) {
                ?>
            
            <tr>
                <td><?php echo $Libro['Id'] ?></td>
                <td><?php echo $Libro['Nombre'] ?></td>
                <td>
                <img class="img-thumbnail rounded" src="../../img/<?php echo $Libro['Imagen'] ?>"width="50" alt="" srcset="">
                </td>
                
                <th>

                <form method="post">

                <input type="hidden" name="txtID" id="txtID" value="<?php echo $Libro['Id'] ?>"/>

                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>

                <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>

                </form>

                </th>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>

<?php include("../template/foother.php") ?>  