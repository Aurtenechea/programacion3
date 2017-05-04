<?php
/*  Hace que todas las rutas sean relativas a la raiz del sitio.
    dirname() devuelve la ruta del directorio sin el archivo en la ruta
    pasada como parametro. (puede ser absoluta o relativa).
    chdir() cambia el directorio en el que php dice estar parado.
    */
chdir( dirname( __DIR__ ) );

define("SYS_PATH", "lib/");
define("APP_PATH", "app/");

require( SYS_PATH . "init.php");



$app = new App;
