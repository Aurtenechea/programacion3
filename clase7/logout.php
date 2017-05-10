<?php
    session_start();
    echo "antes </br>";
    var_dump($_COOKIE);
    session_destroy();
    setcookie("email", $_SESSION['mail'], time()-3000, "/"); // asiganando un tiempo negativo se elimina la cookie
    echo "</br> despues </br>";
    var_dump($_COOKIE);
