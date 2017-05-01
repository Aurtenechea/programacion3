<?php
    require_once("lib.php");
    require_once("./obj/Persona.php");


    // $person = new Persona();
    // $person->setNombre("pacoooo");
    // $person->setApellido("de lucia");
    // $person->setDni("444777");
    // echo $person->save();
    ?>


    <html>
    <head>
    	<title>Ejemplo de ALTA-LISTADO - con archivos -</title>

    	<meta charset="UTF-8">
    	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="estilo.css"> -->
        <script src="script.js"> </script>
    </head>
    <body>

    	<div class="container">

    		<div class="CajaInicio animated bounceInRight">
    			<h1>Listado de PERSONAS</h1>

    <?php

    $ArrPersonas = Persona::getAll();

    echo "<table class='table'>
    		<thead>
    			<tr>
    				<th> DNI </th>
    				<th> NOMBRE </th>
    				<th> APELLIDO </th>
                    <th>  </th>
    			</tr>
    		</thead>";

    	foreach ($ArrPersonas as $persona){

    		echo " 	<tr>
    					<td>".$persona->getDni()."</td>
    					<td>".$persona->getNombre()."</td>
                        <td>".$persona->getApellido()."</td>
                        <td> <button value='".$persona->getId()."' type='button' class='eliminar'>Borrar</button> </td>
    				</tr>";
    	}
    echo "</table>";
    ?>

            <button value='' type='button' id='insert'>Insertar</button>
    		</div>
    	</div>
    </body>
    </html>
