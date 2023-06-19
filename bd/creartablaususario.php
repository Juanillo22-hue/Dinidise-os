<?php

include_once "conex.php";

$sql = " CREATE TABLE tercero (noDoc int (3), nombreP varchar (20), apellido varchar (20), telefono int (10), direccion varchar (60), correo varchar (60))";

if (mysqli_query ($conex, $sql)) {
    echo"transaccion realizada";
}else{
    echo"No se hizo la transaccion";
}