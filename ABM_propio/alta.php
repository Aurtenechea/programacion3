<?php
    require_once("./lib.php");
    require_once("./obj/persona.php");

    echo BR3;
    vd($_POST);
    echo BR3;

    //si viene de alta.php
    if ( isset($_POST['alta']) )
    {
        if ( Persona::validarAlta($_POST['dni'], $_POST['nombre']) ){
            $p = new Persona($_POST['dni'], $_POST['nombre']);
            $p->guardar();
            header("location:index.php/dni");
        }else {
            echo "Datos incorrectos!" . BR3;
        }

    }
?>

<html>
    <head>

    </head>
    <body>

        <a href="index.php">VOLVER</a><?php echo BR3;?>


        <form action="" method="post" enctype="multipart/form-data">
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br><br>
            <label>Dni</label><br>
            <input type="number" name="dni"><br><br>
            <input type="submit" name=alta value="Alta">
        </form>
    </body>

</html>
