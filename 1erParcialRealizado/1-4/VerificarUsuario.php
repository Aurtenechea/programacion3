<?php
    require_once("Usuario.php");
    require_once("lib.php");

     Usuario::$nombreArchivo = "usuario.txt";

    if(isset($_POST['validar']) && isset($_POST['correo']) && isset($_POST['clave'])){
        try{
            if( Usuario::validar($_POST['correo'],$_POST['clave']) ){
                header("location:Listado.php");
            }else {
                echo "El usuario no existe.";
            }
        }catch(exception $e){
            echo "Error verificar usuario.";
        }
    }else if(isset($_POST['validar'])){
        echo "Por favor ingrese todos los datos.";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <h1>UsuarioCarga</h1>
        <form action="VerificarUsuario.php" method="post">
            correo<br>
            <input type="text" name="correo"><br><br>
            clave<br>
            <input type="password" name="clave"><br><br>
            <input type="submit" value="guardar" name="validar">
        </form>
    </body>
</html>
