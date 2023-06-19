<?php

include_once "conex.php";

$sql ="CREATE DATABASE proyecto";
if (mysqli_query($conex, $sql)){
    echo "transaccion realizada";
}else{
    echo"No se hizo la transaccion";
}