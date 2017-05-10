<?php

session_start();

$_SESSION["name"] = $_POST['name'];
$_SESSION["email"] = $_POST['email'];


echo "<a href='leo_datos.php'>muestro datos</a>";
