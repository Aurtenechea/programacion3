<?php
require_once("AccesoDatos.php");
require_once("lib.php");

class Producto
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	public $codBarra;
 	public $nombre;
  	public $pathFoto;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetCodBarra()
	{
		return $this->codBarra;
	}
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetPathFoto()
	{
		return $this->pathFoto;
	}

	public function SetCodBarra($valor)
	{
		$this->codBarra = $valor;
	}
	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetPathFoto($valor)
	{
		$this->pathFoto = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($codBarra=NULL, $nombre=NULL, $pathFoto=NULL)
	{
		if($codBarra !== NULL && $nombre !== NULL && $pathFoto !== NULL){
			$this->codBarra = $codBarra;
			$this->nombre = $nombre;
			$this->pathFoto = $pathFoto;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING
  	public function ToString()
	{
	  	return $this->codBarra." - ".$this->nombre." - ".$this->pathFoto."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	public static function Guardar($obj)
	{
		$resultado = FALSE;

		//ABRO EL ARCHIVO
		$ar = fopen("archivos/productos.txt", "a");

		//ESCRIBO EN EL ARCHIVO
		$cant = fwrite($ar, $obj->ToString());

		if($cant > 0)
		{
			$resultado = TRUE;
		}
		//CIERRO EL ARCHIVO
		fclose($ar);

		return $resultado;
	}
	public static function TraerTodosLosProductos()
	{


		$ListaDeProductosLeidos = array();

		//leo todos los productos del archivo
		$archivo=fopen("archivos/productos.txt", "r");

		while(!feof($archivo))
		{
			$archAux = fgets($archivo);
			$productos = explode(" - ", $archAux);
			//http://www.w3schools.com/php/func_string_explode.asp
			$productos[0] = trim($productos[0]);
			if($productos[0] != ""){
				$ListaDeProductosLeidos[] = new Producto($productos[0], $productos[1],$productos[2]);
			}
		}
		fclose($archivo);

		return $ListaDeProductosLeidos;

	}
//--------------------------------------------------------------------------------//

	public static function TraerTodosLosProductosDB()
	{
		$ListaDeProductosLeidos = array();

		$accesoDatos = AccesoDatos::DameUnObjetoAcceso();
		// $consulta = $accesoDatos->RetornarConsulta("select * from producto");  //puntero a la base de datos
		// $consulta->execute();
		// $datos = $consulta->fetchall();

		$consulta = $accesoDatos->RetornarConsulta("select codigo_barra as codBarra,
													nombre as nombre,
													path_foto pathFoto from producto");

		// //	1 ==================
		// $consulta->execute();
		// vd($consulta);
		// while( $fila = $consulta->fetch(PDO::FETCH_LAZY) ){
		// 	$ListaDeProductosLeidos[] = new Producto($fila->codBarra, $fila->nombre, $fila->pathFoto );
		// 	// vd($ListaDeProductosLeidos);
		// }

			// 2================
		// $prod= new producto();
		$consulta->execute();
		$consulta->setFetchMode( PDO::FETCH_INTO,new producto);

		vd($consulta);

		foreach ($consulta as $prod) {
			vd($prod);

		}
		// $user= $sth->fetch( PDO::FETCH_INTO );
		// $sth->closeCursor();
		// print ($user->id);


		return $ListaDeProductosLeidos;

	}
}

//
// $gsent = $gbd->prepare("SELECT name, colour FROM fruit");
// $gsent->execute();
//
// /* Prueba de tipos de PDOStatement::fetch */
// print("PDO::FETCH_ASSOC: ");
// print("Devolver la siguiente fila como un array indexado por nombre de colunmna\n");
// $result = $gsent->fetch(PDO::FETCH_ASSOC);
// print_r($result);
// print("\n");
//
// print("PDO::FETCH_BOTH: ");
// print("Devolver la siguiente fila como un array indexado por nombre y número de columna\n");
// $result = $gsent->fetch(PDO::FETCH_BOTH);
// print_r($result);
// print("\n");
//
// print("PDO::FETCH_LAZY: ");
// print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
// $result = $gsent->fetch(PDO::FETCH_LAZY);
// print_r($result);
// print("\n");
//
// print("PDO::FETCH_OBJ: ");
// print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
// $result = $gsent->fetch(PDO::FETCH_OBJ);
// print $result->name;
// print("\n");
