<?php
    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['pass'];

    $user = new stdClass();

    $user->mail = $usuario;
    $user->clave = $clave;
    $user->loged = false;

    $_SESSION['mail'] = $usuario;
    $_SESSION['clave'] = $clave;
    $_SESSION['loged'] = false;

    if( $usuario == "admin" &&  $clave== "1234"){
		$user->loged = true;
        $_SESSION['loged'] = true;
	}

    // echo json_encode($user);
    // var_dump($_SESSION);
    var_dump($_COOKIE);

?>
