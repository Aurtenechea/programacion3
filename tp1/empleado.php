<?php
    class Empleado extends Persona{
        private $_legajo;
        private $_sueldo;
        public function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo){
            parent::__construct($nombre, $apellido, $dni, $sexo);
            $this->_sueldo = $sueldo;
            $this->_legajo = $legajo;
        }
        public function getLegajo(){
            return $this->_legajo;
        }
        public function getSueldo(){
            return $this->_sueldo;
        }
        public function Hablar($idioma){
            return "El empleado habla " . $idioma;
        }
        //para que funcione el metodo array_unique();
        public function __toString(){
            $str = parent::toString();
            $str .= " - " . $this->getLegajo();
            $str .= " - " . $this->getSueldo();
            return $str;
        }
        public function toString(){
            $str = parent::toString();
            $str .= " - " . $this->getLegajo();
            $str .= " - " . $this->getSueldo();
            return $str;
        }
    }
 ?>
