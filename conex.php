<?php

$conex = mysqli_connect("localhost","root","");

if(!$conex){
    die ("Error connecting".mysqli_connect_error());
}

echo "conex connected";