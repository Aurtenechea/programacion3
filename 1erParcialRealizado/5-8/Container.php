<?php
//  <Dependencies ----------------------------------------------
require_once("DBAccess.php");
require_once("lib.php");

//  </Dependencies ----------------------------------------------

class Container{
    // <attr ----------------------------------------------------
    private $numero;
    private $descripcion;
    private $pais;
    private $foto;
    // </attr ----------------------------------------------------

    // <getters and setters --------------------------------------
    public function getNumero() { return $this->numero; }
    public function getDescripcion() { return $this->descripcion; }
    public function getPais() { return $this->pais; }
    public function getFoto() { return $this->foto; }
    public function setNumero($valor) { $this->numero = $valor; }
    public function setDescripcion($valor) { $this->descripcion = $valor; }
    public function setPais($valor) { $this->pais = $valor; }
    public function setFoto($valor) { $this->foto = $valor; }
    // </getters and setters --------------------------------------

    public function save(){
        try{
            $dba = DBAccess::getDBAccessObj();
            $consulta = $dba->getQueryObj("CALL InsertarContainer (:descripcion,:pais,:foto)");
    		$consulta->bindValue(':descripcion', $this->descripcion, PDO::PARAM_STR);
    		$consulta->bindValue(':pais', $this->pais, PDO::PARAM_STR);
            $consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);
            $consulta->execute();

        }catch(Exception $e){
            throw $e;
        }
    }

    public static function getAll(){
        $dba = DBAccess::getDBAccessObj();
        $consulta = $dba->getQueryObj("CALL TraerTodosLosContainers() ");
        $consulta->execute();
        $arr= $consulta->fetchAll(PDO::FETCH_CLASS, "Container");
        return $arr;
    }

    public static function deleteContainer($numeroParametro)
	{
		$dba = DBAccess::getDBAccessObj();
		$consulta = $dba->getQueryObj("CALL BorrarContainer(:numero)");
		$consulta->bindValue(':numero',$numeroParametro, PDO::PARAM_INT);
		$consulta->execute();
	}

}
