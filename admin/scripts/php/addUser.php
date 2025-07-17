<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$name = $_POST['username'];  
$age = $_POST['age'];
$sex = $_POST['sex'];
$email  = $_POST['email'];
$pass = $_POST['pass'];

$texto = "usuarios.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar el registro');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Registro Exitoso, ya puede iniciar sesion el administrador');
window.location.href='./../sesion/$texto';
</script>";

$insertarDatos = "INSERT INTO usuarios (username, edad,sexo,email,contrasenia) 
VALUES('$name','$age','$sex','$email','$pass')";
$ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>
?>