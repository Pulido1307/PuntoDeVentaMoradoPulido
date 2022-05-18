<?php 
include_once('ConexionBD.php');

$conexionDB = conexionBD();

$iva = $_POST["data_iva"];
$subtotal = $_POST["data_subtotal"];
$total = $_POST["data_tota"];

$sentenciaSQL = "INSERT INTO venta (iva, subtotal, total) VALUES ('$iva', '$subtotal', '$total') ";

try{
    $conexionDB->query($sentenciaSQL);
    echo json_encode('Se guardaron los datos con exito.');
}catch(Exception $e){
    echo json_encode('Error');
}
?>