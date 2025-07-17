<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$tema = $_POST['tema'];
$state = $_POST['estado'];
$subtitulo = $_POST['subtitulo'];
$numero = $_POST['numero'];

$texto = "salas.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion Correcta de la sala');
window.location.href='./../sesion/$texto';
</script>";

    $updateDatos = "UPDATE salas SET estado = '$state', tema='$tema',subtitulo = '$subtitulo', numero='$numero' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion, $updateDatos);

echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
