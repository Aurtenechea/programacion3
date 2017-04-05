<?php
require_once("./lib.php");
require_once("./producto.php");

vd($_REQUEST);
vd($_GET);
vd($_POST);
echo "<br><br>";

$miProd = new Producto($_POST['codigo'], $_POST['descripcion'], $_POST['importe']);

if(isset($_POST['guardar'])){
  $archivo = fopen("prodWeb.txt", "w") or Die();
  fwrite($archivo, $miProd->toString());
  fclose($archivo);
}
else
{
  $file = fopen("prodWeb.txt","r");
  //$string = fread($file);
  //vd($string);
  while(! feof($file))
  {
    $string = fgets($file);
    //vd($string);
  }
    fclose($file);
}
$arr = explode("-",$string);
vd($arr);
$miProd = new Producto($arr[0], $arr[1],$arr[2]);

$archivo = fopen("archivo.txt", "w") or Die();
fwrite($archivo, $miProd->toString());
fclose($archivo);

/*
  en la clase container crear el metodo leer de archivo.
  que lea de un archivo un listado de productos cuyos atributos estan separados por ";"
  luego cargar el array de productos con los objetos creados a partir de los datos del archivo.
  2
  agregar un cuadro de texto con el nombre del archivo en donde se van a guardar los datos.
  en ese nombre se guardan los datos cargos en los demas cuadros de texto.
  Si el archivo existe primero moveremos el archivo ya existente a la carpeta /backup cambiandole el nombre
  al nombre que tiene mas la fecha.
  3
  al leer si el archivo no existe informarlo.
*/










echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>
