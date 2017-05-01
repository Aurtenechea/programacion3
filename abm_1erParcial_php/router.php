<?php

if (isset($_GET['action'])){

    switch($_GET['action']){
        case 'delete':
            header("location:delete.php"."?id=".$_GET['id']);
            break;
        case 'insert':
            header("location:insert.php");
            break;

    }
}
