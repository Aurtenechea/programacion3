<?php

    //clase por defecto publica, no se puede especificar
    class Producto
    {
        public $codigo;
        public $importe;
        public $descripcion;

        public function __construct($codigo, $importe, $descripcion){
            $this->codigo = $codigo;
            $this->importe = $importe;
            $this->descripcion = $descripcion;

        }

        public function toString()
        {
            return $this->codigo ."-". $this->importe ."-".$this->descripcion;
        }
    }



 ?>
