<?php
    require_once("./persona.php");
    class Empleado extends Persona{
        private $_legajo;
        private $_sueldo;
        private $_pathFoto;

        public function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo){
            parent::__construct($nombre, $apellido, $dni, $sexo);
            $this->_sueldo = $sueldo;
            $this->_legajo = $legajo;
        }
        public function getLegajo(){
            return $this->_legajo;
        }
        public function getPathFoto(){
            return $this->_pathFoto;
        }
        public function setPathFoto($img){
            $this->_pathFoto = $img;
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
            $str .= " - " . $this->getPathFoto();
            return $str;
        }
        public function toString(){
            $str = parent::toString();
            $str .= " - " . $this->getLegajo();
            $str .= " - " . $this->getSueldo();
            $str .= " - " . $this->getPathFoto();
            return $str;
        }


        // FUNC PROPIAS
        public static function ValidarValores($nombre, $apellido, $dni, $sexo, $legajo, $sueldo, $img){
            $result = false;
            $imgSize = $img['size']; // devuelve en bytes.
            $imgSize = $imgSize / (1024 * 1024); // convierto a MB
            echo $imgSize."<br><br>";
            if( $nombre != "" && $apellido != "" && $dni != "" && $sexo != NULL && $legajo != "" && $sueldo != ""){
                echo "evaluo foto: <br><br>";
                if( self::is_image($img['tmp_name']) &&  $imgSize > 0 && $imgSize < 1)
                    $result = true;
            }
            return $result;
        }
        private static function is_image($path){
            $result = false;
            $a = getimagesize($path);
            if($a != false)
            {
                $image_type = $a[2];
                if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP))){
                    //echo "foto verdadera";
                    $result = true;
                }
            }
            return $result;
        }
    }
 ?>
