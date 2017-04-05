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


 ?>
