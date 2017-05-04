<?php
    require_once("Usuario.php");
    Usuario::$nombreArchivo = "usuario.txt";
    if(isset($_POST['guardar']) && isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['edad']) && isset($_POST['clave'])){
        try{
            $u = new Usuario($_POST['nombre'], $_POST['correo'], $_POST['edad'], $_POST['clave']);
            $u->guardar("usuario.txt");
            echo "Usuario guardado con exito.";
        }catch(exception $e){
            echo "Error al guardar usuario.";
        }
    }else if(isset($_POST['guardar'])){
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
        <form action="UsuarioCarga.php" method="post">
            nombre<br>
            <input type="text" name="nombre"><br><br>
            correo<br>
            <input type="text" name="correo"><br><br>
            edad<br>
            <input type="numeric" name="edad"><br><br>
            clave<br>
            <input type="password" name="clave"><br><br>
            <input type="submit" value="guardar" name="guardar">
        </form>
    </body>
</html>
