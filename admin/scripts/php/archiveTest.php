<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$state = $_POST['state'];

$texto = "encuestas.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion Correcta de la sala');
window.location.href='./../sesion/$texto';
</script>";

    $updateDatos = "UPDATE encuestas SET estado = '$state' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion, $updateDatos);

echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
