<?php
    require_once("Container.php");
    require_once("lib.php");


    Container::deleteContainer($_GET['numero']);
    header("location:listado.php");



?>
