<?php
require_once("./empleado.php");
require_once("./lib.php");
const UPLOADS = "./fotos";
//phpinfo();
//vd($_FILES);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";
$legajo = $_POST['legajo'];
$sueldo = $_POST['sueldo'];
$img = $_FILES['img'];

//valida si se cargaron los datos necesarios
if(Empleado::ValidarValores($nombre, $apellido, $dni, $sexo, $legajo, $sueldo, $img)){
    $dir = UPLOADS;
    $pathImg = saveImage($nombre, $apellido, $img, $dir);

    //si se puede guardar la imagen, crear la instancia y guardar todos los demas datos.
    if( $pathImg != "" ){
        $emp = new Empleado($nombre, $apellido, $dni, $sexo, $legajo, $sueldo);
        $emp->setPathFoto($pathImg);
        $file = fopen("empleados.txt", "a") or Die("No se puede abrir el archivo.");
        fwrite($file, $emp->__toString() . PHP_EOL);  //.PHP_EOL   PHP_EOL = end of line
        fclose($file);
        echo '<a href="mostrar.php">Mostrar</a>';
    }else{
        echo "ERROR: No se pudo guardar la imagen";
    }
}else{
    echo "no se pudo crear el empleado <br><br>";
    echo '<a href="index.php">Index</a>';
}

//setea la carpeta uploads, guarda y renombra la foto.
//si se guardo devuelve el path relativo, sino devuelve una cadena vacia;
function saveImage($nombre, $apellido, $img, $dir){
    $result = false;
    $mkdirOk = false;
    $copyOk = false;
    if( !isset($img['name']) || !isset($img['tmp_name']))
        return false;
    //si no existe creo el directorio /uploads
    if(is_dir($dir)){
        $mkdirOk = true;
    }else{
        if (mkdir($dir)){
            $mkdirOk = true;
        }
    }
    if($mkdirOk){
        //preparo el nuevo nombre de la imagen y su extension
        //$ext = pathinfo($img['name'])['extension']; //probar si esto anda.
        $ext = pathinfo($img['name']);
        $ext = $ext['extension'];
        $newImgName = $nombre."-".$apellido.".".$ext;
        $pathImg = $dir."/".$newImgName;
        if(copy($img['tmp_name'], $dir."/". $newImgName))
            $copyOk = true;
    }
    if($mkdirOk && $copyOk)
        $result = true;

    return $result ? $pathImg : "" ;
}

//$_FILES:
// array(1) {
//   ["img"]=>
//   array(5) {
//     ["name"]=>
//     string(10) "prueba.jpg"
//     ["type"]=>
//     string(10) "image/jpeg"
//     ["tmp_name"]=>
//     string(35) "/var/www/.temp_upload_php/phpFoSZKu"
//     ["error"]=>
//     int(0)
//     ["size"]=>
//     int(5408)
//   }
// }
