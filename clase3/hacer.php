<?php
    require_once("./lib.php");
    require_once("./producto.php");
    require_once("./container.php");

    $miProd = new Producto(123, 1000, "Televisor");
    //echo $miProd->toString();

    $archivo = fopen("archivo.txt", "w") or Die();
    fwrite($archivo, $miProd->toString());

    $miContainer = new Container(8);

    for($i=0;$i < 10; $i++){
        $p = new Producto(10+$i, 1000+$i, "prod".$i);
        $miContainer->agregarProducto($p);
        //fwrite($archivo, "\r\n" . $p->toString() );
        //"PHP_EOL end of line"
        fwrite($archivo, PHP_EOL . $p->toString() );
    }
    vd($miContainer);
    fclose($archivo);

?>
