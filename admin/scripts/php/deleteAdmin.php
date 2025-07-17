<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$texto = "administradores.php";
$alertaSucces = "<script type='text/javascript'>
    alert('Administrador Eliminado Correctamente'); 
    window.location.href='./../sesion/$texto';
    </script>";

$consulta = "DELETE FROM admin WHERE username = '$id'";
$ejecutarConsulta = mysqli_query($conexion, $consulta);

echo $alertaSucces;
