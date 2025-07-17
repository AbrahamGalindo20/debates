<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$texto = "anuncios.php";
$alertaSucces = "<script type='text/javascript'>
    alert('Anuncio Eliminado Correctamente'); 
    window.location.href='./../sesion/$texto';
    </script>";

$consulta = "DELETE FROM anuncios WHERE id = '$id'";
$ejecutarConsulta = mysqli_query($conexion, $consulta);

echo $alertaSucces;
