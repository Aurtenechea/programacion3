<?php
    class Container {

        public $numero;
           public $array = Array();
        $array=["a"];
        public $productos;
     

        public function __construct($num){
            $this->numero = $num;
            $this->productos = array();
        }
        public function agregarProducto($prod){

            //array_push($this->productos, $prod);
            $this->productos[] = $prod;
        }
    }
    
?>