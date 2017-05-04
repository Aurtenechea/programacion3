<?php
    require_once("Usuario.php");
    require_once("lib.php");

    Usuario::$nombreArchivo = "usuario.txt";
    // Usuario::traerTodos();

    if(isset($_GET['correo'])){
        Usuario::borrar($_GET['correo']);
    }

?>


<html>
    <head>
    	<title>Listado usuarios</title>
    	<meta charset="UTF-8">
    	<script src="script.js"> </script>
    </head>
    <body>
    	<div class="container">
    		<!-- <div class="CajaInicio animated bounceInRight"> -->
    		    <h1>Listado de PERSONAS</h1>

                <?php

                $usuarios = Usuario::traerTodos();

                echo "<table class='table'>
                		<thead>
                			<tr>
                				<th> NOMBRE </th>
                				<th> CORREO </th>
                				<th> EDAD </th>
                			</tr>
                		</thead>";

            	foreach ($usuarios as $user){
            		echo " 	<tr>
            					<td>".$user->getNombre()."</td>
            					<td>".$user->getCorreo()."</td>
                                <td>".$user->getEdad()."</td>
                                <td> <button value='".$user->getCorreo()."' type='button' class='eliminar'>Borrar</button> </td>
            				</tr>";
            	}
                echo "</table>";
                ?>

                <!-- <button value='' type='button' id='borra'>Insertar</button> -->
    		<!--</div>  </CajaInicio -->
    	</div> <!--  </container -->
    </body>
</html>
