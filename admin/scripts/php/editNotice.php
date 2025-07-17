<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$noSala = $_POST['sala'];  
$linkNoticia = $_POST['linkNoticia'];  
$tema = $_POST['tema'];  
$fecha =  $_POST['fecha'];

$texto = "noticias.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion Correcta de la Noticia');
window.location.href='./../sesion/$texto';
</script>";

    $updateDatos = "UPDATE noticiasgenerales SET fecha = '$fecha', tema='$tema',linkNoticia = '$linkNoticia', idRoom='$noSala' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion, $updateDatos);

echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
