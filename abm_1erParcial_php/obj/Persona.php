<?php
//  <Dependencies ----------------------------------------------
require_once("DBAccess.php");
require_once("lib.php");

//  </Dependencies ----------------------------------------------

class Persona{
    // <attr ----------------------------------------------------
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    // </attr ----------------------------------------------------

    // <getters and setters --------------------------------------
    public function getId() { return $this->id; }
    public function getApellido() { return $this->apellido; }
    public function getNombre() { return $this->nombre; }
    public function getDni() { return $this->dni; }
    public function getFoto() { return $this->foto; }
    public function setId($valor) { $this->id = $valor; }
    public function setApellido($valor) { $this->apellido = $valor; }
    public function setNombre($valor) { $this->nombre = $valor; }
    public function setDni($valor) { $this->dni = $valor; }
    public function setFoto($valor) { $this->foto = $valor; }
    // </getters and setters --------------------------------------

    public function save(){
        try{
            $dba = DBAccess::getDBAccessObj();
            $consulta = $dba->getQueryObj("CALL InsertarPersona (:nombre,:apellido,:dni)");
    		$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
    		$consulta->bindValue(':apellido', $this->apellido, PDO::PARAM_STR);
    		$consulta->bindValue(':dni', $this->dni, PDO::PARAM_STR);
            $consulta->execute();
            $consulta = $dba->getQueryObj("select * from persona where dni = ".$this->dni);
            $consulta->execute();
    		$personaBuscada= $consulta->fetchObject('persona'); //devuelve una persona
        }catch(Exception $e){
            throw $e;
        }
        // vd($dba->returnLastInsertId($dba));
        return $personaBuscada->id;
    }

    public static function getAll(){
        $dba = DBAccess::getDBAccessObj();
        $consulta = $dba->getQueryObj("CALL TraerTodasLasPersonas() ");
        $consulta->execute();
        $arrPersonas= $consulta->fetchAll(PDO::FETCH_CLASS, "persona");
        return $arrPersonas;
    }

    public static function deletePersona($idParametro)
	{
		$dba = DBAccess::getDBAccessObj();
		//$consulta =$objetoAccesoDato->RetornarConsulta("delete from persona	WHERE id=:id");
		$consulta = $dba->getQueryObj("CALL BorrarPersona(:id)");
		$consulta->bindValue(':id',$idParametro, PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->rowCount();
	}

}
