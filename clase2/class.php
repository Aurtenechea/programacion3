<?php

    //clase por defecto publica, no se puede especificar


    class calculadora
    {
        public static $attrStatic;
        public $attrInstance;

        //por defecto es public.
        public static function sumar($a, $b){
            return $a + $b;
        }
    }



 ?>
