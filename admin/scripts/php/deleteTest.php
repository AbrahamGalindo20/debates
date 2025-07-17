<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$texto = "encuestas.php";
$alertaSucces = "<script type='text/javascript'>
    alert('Encuesta Elimanda Correctamente'); 
    window.location.href='./../sesion/$texto';
    </script>";

$consulta = "DELETE FROM encuestas WHERE id = '$id'";
$ejecutarConsulta = mysqli_query($conexion, $consulta);

echo $alertaSucces;
