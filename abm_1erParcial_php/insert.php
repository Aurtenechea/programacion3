<?php

require_once("lib.php");
const FOLDER = "./fotos";

// const SLASH = "/";

if(isset($_POST['enviar']) && isset($_POST['name']) && isset($_POST['lastname']) isset($_POST['dni']) && isset($_FILES['file'])){
    $nombre = $_POST['name'];
    $archivo = $_FILES['file'];
    $apellido = $_POST['lastname'];
    $dni = $_POST['dni'];

    //vd($_POST);
    //vd($_FILES);

    // if(empty( moveTempToPerm($_FILES['file'], FOLDER,'miArchivo' )) );


    // $nombreNuevoArchivo
    try{
        $direccionFoto = moveTempToPerm($_FILES['file'], FOLDER, $nombre );
        
        echo "listo!";
    }catch(exception $e){
        echo $e->getMessage();
    }
    // echo BR2 . __DIR__;
}
?>

<form action="insert.php" method="post" enctype="multipart/form-data">
    Nombre<br>
    <input type="text" name="name"><br>
    Apellido<br>
    <input type="text" name="lastname"><br>
    Dni<br>
    <input type="number" name="dni" min="0" max="100000000"><br>
    Archivo:<br>
    <input type="file" name="file"><br><br>
    <input type="submit" name="enviar" value="enviar">
</form>
