<?php
include_once('../Models/conexionBDModel.php');
class ClienteController{
    private $objModel;

    public function __construct(){
        $this->objModel= new ConexionDBModel();
    }

    public function hacerAltaCliente($rfc, $nombre, $apellido, $domicilio){
        return $this->objModel->altaCliente($rfc, $nombre, $apellido, $domicilio); 
    }
}
?>