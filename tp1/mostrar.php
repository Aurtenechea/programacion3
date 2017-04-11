<?php
require_once("lib.php");
require_once("empleado.php");
$file = fopen("empleados.txt", "r") or Die("No se puede abrir el archivo.");
$empleados = array();
$i=0;
while(! feof($file)){
    // $string = trim( fgets($file) );
    $string = fgets($file);
    $string = str_replace(PHP_EOL,"",$string);
    echo $string . BR2;
    if ($string != ""){
        $arr = explode(" - ", $string);
        vd($arr);
        $empleados[] = new Empleado($arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5]);
        $empleados[$i]->setPathFoto($arr[6]);
    }
    $i++;
}

foreach ($empleados as $emp ) {
    echo $emp . '<img src="'.$emp->getPathFoto().'" alt="worker" height="50" width="50">' . BR2;
}
//vd($emp);

fclose($file);
