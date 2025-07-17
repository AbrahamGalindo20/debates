<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$texto = "noticias.php";
$alertaSucces = "<script type='text/javascript'>
    alert('Noticia Eliminada Correctamente'); 
    window.location.href='./../sesion/$texto';
    </script>";

$consulta = "DELETE FROM noticiasgenerales WHERE id = '$id'";
$ejecutarConsulta = mysqli_query($conexion, $consulta);

echo $alertaSucces;
