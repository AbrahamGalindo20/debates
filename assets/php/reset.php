<?php
include 'conexion.php';
$conexion = conectar();
$usuario = $_POST['name'];

$alertaIncorrecto = "<script type='text/javascript'>
    window.location.href='./../../access.php';
    </script>";

$obtenerDatos = "SELECT * FROM usuarios WHERE email = '$usuario' OR  username = '$usuario'";
$ejecutarDatos = mysqli_query($conexion, $obtenerDatos);
$row = mysqli_fetch_assoc($ejecutarDatos);
$id = $row['id'];
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
$datosEncriptados = openssl_encrypt($id, 'aes-256-cbc', 'DebateOnline.es', 0, $iv);
$idE =  base64_encode($iv . $datosEncriptados);
$alertaCorrectoAdmin = "<script type='text/javascript'>
    window.location.href='./../../resetPass.php?id=$idE';
    </script>";
$filasUsuarios = mysqli_num_rows($ejecutarDatos);
if ($filasUsuarios) {
    echo $alertaCorrectoAdmin;
    header('Location:./../../resetPass.php?id='.$idE);
} else {
    echo $alertaIncorrecto;
    header('Location:./../../index.php');
}

mysqli_close($conexion);
