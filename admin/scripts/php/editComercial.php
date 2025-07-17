<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$area = $_POST['area'];  
$idAnuncio = $_POST['idAnuncio'];  
$linkAnuncio = $_POST['linkAnuncio'];

$texto = "anuncios.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion Correcta de los anuncios');
window.location.href='./../sesion/$texto';
</script>";

    $updateDatos = "UPDATE anuncios SET area = '$area', idAnuncio='$idAnuncio',linkAnuncio='$linkAnuncio' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion, $updateDatos);

echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
