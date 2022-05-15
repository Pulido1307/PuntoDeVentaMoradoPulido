<?php 

class Conexion{
    private  $user="root";
    private $pass="";
    private $host="127.0.0.1";//localhost
    private $db="";
    private $con;//conexion

    public function __construct()
    {
        try{
            $this->con= new mysqli($this->host,$this->user,$this->pass,$this->db);
            print("Conexion exitosa!!!");
        }
        catch(Exception $e){
            print($e->getMessage());
            print("Error!!!");
        }
    }

    public function altaAuto($ns, $marca, $color, $km, $modelo, $tipo){
       
    }

    public function bajaAuto($idAuto){
       
    }

    public function actualizarAuto($idAuto, $ns, $marca, $color, $km, $modelo, $tipo){
       
    }

    public function buscarAuto($idAuto){
       
    }

    public function altaCliente($rfc, $nombre, $apellido, $domicilio){

    }

    public function buscarCliente($rfc){

    }
}

?>
