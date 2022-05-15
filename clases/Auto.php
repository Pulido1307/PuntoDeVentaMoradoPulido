<?php 
    class Auto{
        private $NS;
        private $marca;
        private $color;
        private $KM;
        private $modelo;
        private $precioSNIVA;
        private $tipo;

        public function __construct($NS, $marca, $color, $KM, $modelo, $precioSNIVA, $tipo)
        {
            $this->NS = $NS;
            $this->marca = $marca;
            $this->color = $color;
            $this->KM = $KM;
            $this->modelo = $modelo;
            $this->precioSNIVA = $precioSNIVA;
            $this->tipo = $tipo;
        }


        public function setNS($NS){
            $this->NS = $NS;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setKM($KM){
            $this->KM = $KM;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function setPrecioSNIVA($precioSNIVA){
            $this->precioSNIVA = $precioSNIVA;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getNS(){
            return $this->NS;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getColor(){
            return $this->color;
        }

        public function getKM(){
            return $this->KM;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function getPrecioSNIVA(){
            return $this->precioSNIVA;
        }

        public function getTipo(){
            return $this->tipo;
        }

    }
?>