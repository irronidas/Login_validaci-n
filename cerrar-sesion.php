<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion = null || $varsesion = ''){
    echo'No posee privilegios de acceso';
    die();
}
    session_destroy();
    header("Location:Index.html")
?>