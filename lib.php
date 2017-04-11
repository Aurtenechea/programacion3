<?php
    error_reporting (E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    function vd($array){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }
    function pr($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    //define("MAXSIZE", 100);  //otra forma;
    const BR = "<br />";
    const BR2 = "<br />";
    const BR3 = "<br />";

    function br( $cant=1 ){
        for ($i=0; $i < $cant; $i++) {
            echo "<br />\n";
        }
    }



 ?>
