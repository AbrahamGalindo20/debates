<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$texto = "salas.php";
$alertaSucces = "<script type='text/javascript'>
    alert('Sala Eliminada Correctamente'); 
    window.location.href='./../sesion/$texto';
    </script>";

$consulta = "DELETE FROM salas WHERE id = '$id'";
$ejecutarConsulta = mysqli_query($conexion, $consulta);

echo $alertaSucces;
