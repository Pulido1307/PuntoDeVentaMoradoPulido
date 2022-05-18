<?php
function conexionBD(){
    $user="root";
    $pass="";
    $host="127.0.0.1";
    $db="agencia";

    $conexion =  new mysqli($host,$user,$pass,$db);
    return $conexion;
}
?>