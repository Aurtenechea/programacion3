<?php

    session_start();

    if( isset($_SESSION['mail'])){
        echo "</br></br></br> Bienvenido " . $_SESSION['mail'] . "!!! </br></br></br>";
        echo "<button onclick='logout()' class='btn'>Desloguearme</button>";
        setcookie("email", $_SESSION['mail'], time()+3000, "/");
        //setcookie("email",$_SESSION['mail'],time() - 3000,"/");  // para boorrar una cookie

    }
    else{
            echo "no tiene permiso";
    }

    // echo json_encode($user);
    // var_dump($_SESSION);
    // var_dump($_COOKIE);
