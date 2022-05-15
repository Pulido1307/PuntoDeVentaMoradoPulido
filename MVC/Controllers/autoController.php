<?php
include_once('../Models/conexionBDModel.php');
class AutoController{
    
    private $objModel;

    public function __construct(){
        $this->objModel= new ConexionDBModel();
    }

    public function hacerBajaAuto($ns){
        return $this->objModel->bajaAuto($ns);
    }

    public function hacerAltaAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio){
        return $this->objModel->altaAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio);
    }
    
    public function hacerActualizarAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio){
        return $this->objModel->actualizarAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio);
    }

    public function hacerConsultarAuto($ns){
        $res = $this->objModel->consultarAuto($ns)->fetch_assoc();
        return $res;
    }

    public function hacerConsultaTodosAutos(){
        $GLOBALS['autos'] =$this->objModel->consultaTodosAutos();
    }
}
?>