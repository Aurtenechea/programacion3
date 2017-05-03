<?php
    require_once("lib.php");

    class Usuario
    {
        public static $nombreArchivo;
        private $nombre;
        private $correo;
        private $edad;
        private $clave;

        // <getters and setters --------------------------------------
        public function getNombre() { return $this->nombre; }
        public function getCorreo() { return $this->correo; }
        public function getEdad() { return $this->edad; }
        // </getters and setters --------------------------------------

        public function __construct($nombre, $correo, $edad, $clave){
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->edad = $edad;
            $this->clave = $clave;
        }
        public function toString(){
            return $this->nombre ."-". $this->correo ."-". $this->edad ."-". $this->clave;
        }
        public function guardar($nombreArchivo){
            $archivo = fopen(self::$nombreArchivo, "a") or Die();
            fwrite( $archivo, $this->toString() . PHP_EOL);
            fclose($archivo);
        }
        public static function validar($correo, $clave){
            $result= false;
            $archivo = fopen(self::$nombreArchivo, "r") or Die();
            while(  !feof($archivo) ){
                $string = fgets($archivo);
                // $string = str_replace(' ', '', $string);
                $string = str_replace(PHP_EOL, '', $string);
                // vd($string);
                $arr = explode("-", $string);
                // vd($arr);
                if($arr[1] == $correo && $arr[3] == $clave){
                    $result =  true;
                    break;
                }
            }
            fclose($archivo);
            return $result;
        }
        public static function traerTodos(){
            $archivo = fopen(self::$nombreArchivo, "r") or Die();
            $personas;
            while(  !feof($archivo) ){
                $string = fgets($archivo);
                // $string = str_replace(' ', '', $string);
                $string = str_replace(PHP_EOL, '', $string);
                // vd($string);
                if(strpos($string, '-')){
                    $arr = explode("-", $string);
                    // vd($arr);
                    $personas[] = new Usuario($arr[0],$arr[1],$arr[2],$arr[3]);
                }

            }
            fclose($archivo);
            // vd($personas);
            return $personas;
        }
        public static function borrar($correo){
            $usuarios = self::traerTodos();
            $archivo = fopen(self::$nombreArchivo, "w") or Die();
            // $archivo = fopen($nombreArchivo, "w") or Die();
            foreach($usuarios as $user){
                if( $user->getCorreo() != $correo ){
                    fwrite( $archivo, $user->toString() . PHP_EOL);
                }
            }
            fclose($archivo);
        }
    }


 ?>
