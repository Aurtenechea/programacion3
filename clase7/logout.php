<?php
    session_start();
    echo "antes </br>";
    var_dump($_COOKIE);
    session_destroy();
    echo "</br> despues </br>";
    var_dump($_COOKIE);
