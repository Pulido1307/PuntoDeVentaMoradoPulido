<?php 

    class Cliente{
        private $RFC;
        private $nombre;
        private $apellido;
        private $domicilio;

        public function __construct($RFC, $nombre, $apellido,$domicilio)
        {
            $this->RFC = $RFC;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->domicilio = $domicilio;
        }

        public function setRFC($RFC){
            $this->RFC = $RFC;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setDomicilio($domicilio){
            $this->domicilio = $domicilio;
        }

        public function getRFC(){
            return $this->RFC;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getDomicilio(){
            return $this->domicilio;
        }
        
    }

?>