<?php
    abstract class Persona{
        private $_apellido;
        private $_dni;
        private $_nombre;
        private $_sexo;

        public function __construct($nombre, $apellido, $dni, $sexo){
            $this->_apellido = $apellido;
            $this->_nombre = $nombre;
            $this->_dni = $dni;
            $this->_sexo = $sexo;
        }
        public function getNombre(){
            return $this->_nombre;
        }
        public function getApellido(){
            return $this->_apellido;
        }
        public function getDni(){
            return $this->_dni;
        }
        public function getSexo(){
            return $this->_sexo;
        }
        public function toString(){
            $str = $this->getNombre() . " - ";
            $str .= $this->getApellido() . " - ";
            $str .= $this->getDni() . " - ";
            $str .= $this->getSexo();
            return $str;
        }
        public abstract function Hablar($idioma);
    }
?>
