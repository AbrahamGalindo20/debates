<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];  
$tema = $_POST['Tema'];
$sala = $_POST['Sala'];
$estado  = $_POST['Estado'];

$texto = "encuestas.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar el registro');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Registro Exitoso');
window.location.href='./../sesion/$texto';
</script>";

$insertarDatos = "INSERT INTO encuestas (numero, tema,sala,estado) 
VALUES('$id','$tema','$sala','$estado')";
$ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>
?>