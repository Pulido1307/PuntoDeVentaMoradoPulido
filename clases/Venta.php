<?php 
    class Venta{
        private $idVenta;
        private $idCliente; //RFC 
        private $idAuto; //Número de serie 
        private $subtotal;
        private $total;

        public function __construct($idVenta, $idCliente, $idAuto)
        {
            $this->idVenta = $idVenta;
            $this->idCliente = $idCliente;
            $this->idAuto = $idAuto;
        }

        public function setIdVenta($idVenta){
            $this->idVenta = $idVenta;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }

        public function setIdAuto($idAuto){
            $this->idAuto = $idAuto;
        }

        public function setSubtotal($subtotal){
            $this->subtotal = $subtotal;
        }

        public function setTotal($total){
            $this->total = $total;
        }

        public function getIdVenta(){
            return $this->idVenta;
        }

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function getIdAuto(){
            return $this->idAuto;
        }

        public function getSubtotal(){
            return $this->subtotal;
        }

        public function getTotal(){
            return $this->total;
        }
    }
?>