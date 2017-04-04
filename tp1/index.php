<?php
    require_once("./lib.php");
    require_once("./persona.php");
    require_once("./empleado.php");
    require_once("./fabrica.php");


    $yo = new Empleado("ignacio", "aurtenechea", "35208599", "H", "1234",12000);
    $otro = new Empleado("ezequiel", "aurtenechea", "30308521", "H", "4343",20000);

    //  TEST EMPLEADO
    //pr($yo); echo "<br>";
    // echo $yo->Hablar("Ingles"); echo "<br>";
    // echo $yo->toString(); echo "<br>";
    // echo $yo->getNombre(); echo "<br>";
    // echo $yo->getApellido(); echo "<br>";
    // echo $yo->getDni(); echo "<br>";
    // echo $yo->getSexo(); echo "<br>";
    // echo $yo->getLegajo(); echo "<br>";
    // echo $yo->getSueldo(); echo "<br>";

    //  TEST FABRICA
    $fabrica = new Fabrica("razSoc de mi fabrica");
    $fabrica->agregarEmpleado($yo);
    $fabrica->agregarEmpleado($yo);
    //no agrega el mismo empleado.
    //pr($fabrica);
    $fabrica->agregarEmpleado($otro);
    echo $fabrica->calcularSueldos();
    echo "<br><br>" . $fabrica->toString();
    
    $fabrica->eliminarEmpleado($otro);
    pr($fabrica);
    echo "<br><br>" . $fabrica->toString();







?>
