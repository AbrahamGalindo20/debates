<?php
session_start();
error_reporting(0);
$acceso.="<script type='text/javascript'>
alert('La sesion ha sido finalizada, no puedes acceder, 
a menos quevuelva a iniciar sesion');
window.location.href='./../../index.php';
</script>";
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion == ''){
    echo $acceso;
    die();}
session_destroy();
header('Location:./../../index.php');
?>