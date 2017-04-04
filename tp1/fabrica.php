<?php
    class Fabrica{
        private $_empleados;
        private $_razonSocial;
        public function __construct($razonSocial){
            $this->_razonSocial = $razonSocial;
            $this->_empleados = Array();
        }
        public function agregarEmpleado($empleado){
            array_push($this->_empleados, $empleado);
            $this->eliminarEmpleadosRepetidos();
            sort($this->_empleados);

        }
        public function calcularSueldos(){
            $acum = 0;
            foreach ($this->_empleados as $item) {
                $acum += $item->getSueldo();
            }
            return $acum;
        }
        public function eliminarEmpleado($empleado){
            for ($i=0; $i < count($this->_empleados) ; $i++) {
                if($this->_empleados[$i]->getDni() == $empleado->getDni()){
                    unset($this->_empleados[$i]);
                    sort($this->_empleados);
                    break;
                }
            }
        }
        public function eliminarEmpleadosRepetidos(){
            $this->_empleados =array_unique($this->_empleados);
            sort($this->_empleados);
        }
        public function toString(){
            $str = $this->getEmpleados();
            $str .= " *** FABRICA:  ";
            $str .= " -RS: " .$this->getRazonSocial();
            $str .= " -Suel: " . $this->calcularSueldos();
            return $str;
        }
        public function getRazonSocial(){
            return $this->_razonSocial;
        }
        public function getEmpleados(){
            $str = "EMPLEADOS:  ";
            foreach ($this->_empleados as $item) {
                $str .= $item->toString();
                $str .= " |||| ";
            }
            return $str;
        }
    }
 ?>
