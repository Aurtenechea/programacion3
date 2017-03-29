<?php
    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        public function FiguraGeometrica()
        {

        }

        public abstract function Dibujar();
        protected abstract function CalcularDatos();
        protected abstract function toString();


        public function setColor( $color )
        {
            $this->$_color = $color;
        }
        public function getColor()
        {
            return $this->$_color;
        }
    }

    class Cuadrado extends FiguraGeometrica
    {
        protected $_ladoUno;
        protected $_ladoDos;

        function __construct($lado1,$lado2)
        {
            $this->_ladoUno = $lado1;
            $this->_ladoDos = $lado2;
            $this::CalcularDatos();
        }

        protected function CalcularDatos()
        {
            $this->_perimetro = $this->_ladoUno * 4 ;
            $this->_superficie = $this->_ladoUno * $this->_ladoDos ;
        }
        public function Dibujar()
        {
            echo '<br>';
            echo '<br>';

            for ($i=0; $i < $this->_ladoDos; $i++)
            {
                for ($j=0; $j < $this->_ladoUno ; $j++)
                {
                    echo '* ';
                }
                echo '<br>';
            }
        }

        function toString()
        {
            var_dump($this);
        }


    }

    $objCuadrado = new Cuadrado(4, 4);
    //var_dump($objCuadrado);

    $objCuadrado->setColor("rojo");


    $objCuadrado->Dibujar();

    echo '<br>';
    echo '<br>';

    $objCuadrado->toString();




?>
