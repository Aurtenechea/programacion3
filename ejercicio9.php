<?php
    $dic = array(
        "uno" => 1,
        "dos" => 2,
        "tres" => 3,
    );
    for ($i = 0 ;$i<3 ;$i++)
    {
        //key($dic);
        echo $dic[key($dic)] . "<br>";
        next($dic);
    }



 ?>
