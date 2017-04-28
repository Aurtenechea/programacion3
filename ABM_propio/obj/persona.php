<?php
    class Persona {
        private $nombre;
        private $dni;
        private $nombre;


        public __construct($dni, $nombre){
            $this
        }
        public static function validarAlta($dni, $nombre){
            $result = false;

            if ($dni != 0 && $nombre != "")
                $result = true;

            return $result;
        }
    }
