<?php
include_once('../Models/conexionBDModel.php');
class VentaController{
    private $objModel;

    public function __construct(){
        $this->objModel= new ConexionDBModel();
    }

    public function hacerVenta($ns, $rfc){
        $resCliente = $this->objModel->consultarClienteAux($rfc);
        $resAuto = $this->objModel->consultarAutoAux($ns);
        if($resCliente and $resAuto){
            return "Datos correctos";
        }else{
            return "No existe el rfc o ns ingresados.";
        }
    }
}
?>