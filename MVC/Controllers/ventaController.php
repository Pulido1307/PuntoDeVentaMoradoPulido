<?php
include_once('../Models/conexionBDModel.php');
class VentaController{
    private $objModel;

    public function __construct(){
        $this->objModel= new ConexionDBModel();
    }

    public function hacerVenta($rfc){
        $resCliente = $this->objModel->consultarClienteAux($rfc);
        if($resCliente){
            return "Datos correctos";
        }else{
            return "No existe el RFC ingresado.";
        }
    }
}
?>