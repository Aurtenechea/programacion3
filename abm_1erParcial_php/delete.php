<?php
    require_once("./obj/Persona.php");
    require_once("lib.php");

    vd($_GET);

    // try{
        Persona::deletePersona($_GET['id']);
        header("location:index.php");
    // }catch(exception $e){
    //     echo "No se pudo borrar </br>";
    //     vd($e);
    // }



?>


    <!-- <html>
    <head>
    	<title>Borrar</title>
    	<meta charset="UTF-8">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="estilo.css">
        <script src="script.js"> </script>
    </head>
    <body>
    	<div class="container">
    		<div class="CajaInicio animated bounceInRight">
    			<h1></h1>
    		</div>
    	</div>
    </body>
    </html> -->
