<?php

    $arr = array();
    for ($i = 0; $i<5; $i++)
    {
        $array[] = rand(0, 10);
        $acum += $array[$i];
    }
    var_dump($array);
    $prom =$acum / 5;
    echo "<br><br>el promedio es de ". $prom;
    if($prom< 6)
        echo "<br>Es menor a 6";
    else if($prom == 6)
        echo "<br>Es igual a 6";
    else
        echo "<br>Es mayor a 6";

?>
