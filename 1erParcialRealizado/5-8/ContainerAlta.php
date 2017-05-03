<?php

require_once("lib.php");
require_once("Container.php");

const FOLDER = "./fotos";

// const SLASH = "/";

if(isset($_POST['enviar']) && isset($_POST['descripcion']) && isset($_POST['pais']) && isset($_FILES['file'])){
    //vd($_POST);
    //vd($_FILES);
    // if(empty( moveTempToPerm($_FILES['file'], FOLDER,'miArchivo' )) );
    $nombreNuevoArchivo = $_POST['pais']. "_" . time();
    try{
        $direccionFoto = moveTempToPerm($_FILES['file'], FOLDER, $nombreNuevoArchivo);
        $container = new Container();
        $container->setDescripcion($_POST['descripcion']);
        $container->setPais($_POST['pais']);
        $container->setFoto($direccionFoto);
        $container->save();
        echo "listo!";
    }catch(exception $e){
        echo $e->getMessage();
    }
}else if(isset($_POST['enviar'])){
    echo "Por favor ingrese todos los datos.";
}
?>

<form action="ContainerAlta.php" method="post" enctype="multipart/form-data">
    descripcion<br>
    <input type="text" name="descripcion"><br>
    pais<br>
    <input type="text" name="pais"><br>
    foto<br>
    <input type="file" name="file"><br><br>
    <input type="submit" name="enviar" value="enviar">
</form>
