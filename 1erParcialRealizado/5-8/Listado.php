<?php
    require_once("lib.php");
    require_once("./Container.php");

    ?>


    <html>
        <head>
        	<title>Listado Container</title>
        	<meta charset="UTF-8">
            <script src="script.js"> </script>
        </head>
    <body>

    	<div class="container">
    		<!-- <div class="CajaInicio animated bounceInRight"> -->
    		    <h1>Listado de Container</h1>
                <?php
                $arr = Container::getAll();

                echo "<table class='table'>
                		<thead>
                			<tr>
                				<th> NUMERO </th>
                				<th> DESCRIPCION </th>
                				<th> PAIS </th>
                                <th> FOTO </th>
                                <th>  </th>
                			</tr>
                		</thead>";

            	foreach ($arr as $cont){
            		echo " 	<tr>
            					<td>".$cont->getNumero()."</td>
            					<td>".$cont->getDescripcion()."</td>
                                <td>".$cont->getPais()."</td>
                                <td><img src='".$cont->getFoto()."' width='100px' height='100px'/></td>
                                <td> <button value='".$cont->getNumero()."' type='button' class='eliminar'>Borrar</button> </td>

            				</tr>";
            	}
                echo "</table>";
                ?>

                <!-- <button value='' type='button' id='insert'>Insertar</button> -->
    		<!--</div>  </CajaInicio -->
    	</div> <!--  </container -->
    </body>
    </html>
