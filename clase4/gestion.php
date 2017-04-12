<?php
require_once("lib.php");
const FOLDER = "./fotos";
// const SLASH = "/";



$nombre = $_POST['nombre'];
$archivo = $_FILES['file'];

vd($_POST);
vd($_FILES);

// if(empty( moveTempToPerm($_FILES['file'], FOLDER,'miArchivo' )) );
echo "listo!" . moveTempToPerm($_FILES['file'], FOLDER,$nombre );
echo BR2 . __DIR__;




// mkdir(FOLDER);
//
// $arr = pathinfo($archivo['name']);
// $ext = $arr['extension'];
// $nuevaRuta =  FOLDER . SLASH . $nombre .".".  $ext;
// echo copy($archivo['tmp_name'], $nuevaRuta);

// array(1) {
//   ["file"]=>
//   array(5) {
//     ["name"]=>
//     string(9) "Koala.jpg"
//     ["type"]=>
//     string(10) "image/jpeg"
//     ["tmp_name"]=>
//     string(24) "C:\xampp\tmp\php6EE8.tmp"
//     ["error"]=>
//     int(0)
//     ["size"]=>
//     int(780831)
//   }
// }
