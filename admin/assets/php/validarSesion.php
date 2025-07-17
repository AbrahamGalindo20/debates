<?php
session_start();
include 'conexion.php';
$conexion = conectar();
$usuario = $_POST['Correo'];
$password = $_POST['Contrasenia'];

$alertaCorrectoAdmin = "<script type='text/javascript'>
    alert('Bienvenido a tu sesión $usuario'); 
    window.location.href='./../../scripts/sesion/login.php';
    </script>";
    $alertaIncorrecto = "<script type='text/javascript'>
    alert('Los datos ingrsados no existen o son incorrectos');
    window.location.href='../../index.php';
    </script>";
   

$obtenerDatos = "SELECT * FROM admin WHERE email = '$usuario' AND contrasenia = '$password'";
$ejecutarDatos = mysqli_query($conexion,$obtenerDatos);
$row = mysqli_fetch_assoc($ejecutarDatos);
$filasUsuarios = mysqli_num_rows($ejecutarDatos);
$_SESSION['usuario'] = $usuario;
if($filasUsuarios){
        echo $alertaCorrectoAdmin;
}else{
    echo $alertaIncorrecto;
}
//mysqli_free_result($filasUsuarios);
mysqli_close($conexion);
?>
