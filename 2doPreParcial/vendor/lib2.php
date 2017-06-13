<?php

/*
determinar extension del archivo subido.
determinar nombre con el que la va a guardar.
determinar ruta en la que se lo va a guardar.
-validar que existe la ruta. sino existe crearla.
-validar no existe una foto con el mismo nombre.
si existe cambiarle el nombre a la nueva.

Devuelve la nueva ruta o una cadena vacia si no la pudo guardar.
*/
function saveImage($new_name, $client_file_full_name, $dir){
    $result = false;
    $ext = explode(".", $client_file_full_name)  ;
    $ext = array_reverse($ext);
    $ext = $ext[0];
    $new_full_path = $dir."/". $new_name . $ext;

    //si no existe creo el directorio.
    if(is_dir($dir) || mkdir($dir)){
        if( file_exists($new_full_path) ){
            $new_full_path = $dir . "/" . $new_name . time() . $ext;
        }
        if(copy($client_file_full_name, $new_full_path)){
            $result = true;
        }
    }
    return $result ? $client_file_full_name : "" ;
}
