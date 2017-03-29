<?php
    error_reporting (E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);


    //require_once "./funciones.php";

    //require "noexiste.php";
    /* require() si no encuentra un archivo ya frena la aplicacion devolviendo un fatal error. Si puede llamar muchas veces.*/


    //QUE ES ESTE WARNING!
    //require_once "./funciones.php";
    //$resultado = sumar(2+3);


    require_once "./class.php";

    echo "<br><br>";

    $resultado = Calculadora::Sumar(3,6);
    var_dump($resultado);
    echo "<br><br>";

    Calculadora::$attrStatic = 10;
    var_dump(Calculadora::$attrStatic);
    echo "<br><br>";

    $objCalc = new Calculadora();
    $objCalc->attrInstance = 9998;
    var_dump($objCalc);

?>
