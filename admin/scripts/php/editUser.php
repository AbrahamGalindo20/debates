<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$name = $_POST['username'];  
$age = $_POST['age'];
$sex = $_POST['sex'];
$email  = $_POST['email'];
$pass = $_POST['pass'];

$texto = "usuarios.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion Exitosa, ya puede consultar los datos del administrador');
window.location.href='./../sesion/$texto';
</script>";
$updateDatos = "UPDATE usuarios SET id = '$id', username = '$name', edad = '$age', sexo = '$sex', email = '$email', contrasenia = '$pass' WHERE id = '$id'";
$ejecutarSolicitud = mysqli_query($conexion,$updateDatos); 
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>