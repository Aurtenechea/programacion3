<?php
    error_reporting (E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    function vd($array){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }
    function pr($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    //define("MAXSIZE", 100);  //otra forma;
    const BR = "<br />";
    const BR2 = "<br /><br />";
    const BR3 = "<br /><br /><br />";

    function br( $cant=1 ){
        for ($i=0; $i < $cant; $i++) {
            echo "<br />\n";
        }
    }

    function moveTempToPerm($files, $permDir, $newName){
      if( !defined(SLASH) )
        const FOLDER = "/";

      //valido parametros
      if( empty($files) || empty($permDir) || empty($newName) || !isset($files['name']) || !isset($files['tmp_name']))
        return "";
      //creo carpeta
      if(!is_dir($permDir))
        mkdir($permDir);

      $arr = pathinfo($files['name']);
      $ext = $arr['extension'];
      $nuevaRuta =  $permDir . SLASH . $newName .".".  $ext;
      //si existe lo mando a la carpeta backup
      if(file_exists($nuevaRuta)){
        if(!is_dir($permDir.SLASH."backup"))
          mkdir($permDir.SLASH."backup");
        $nuevaRuta = $permDir . SLASH . "backup" . SLASH . $newName ."_". date("Y_m_d_H:i:s") .".".  $ext;
      }
      if( move_uploaded_file($files['tmp_name'], $nuevaRuta) )
        return $nuevaRuta;
      else
        return "";
    }



 ?>
