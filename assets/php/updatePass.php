<?php
include 'conexion.php';
$conexion = conectar();
$pass = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$id = $_POST['id'];
$alertaIncorrecto = "<script type='text/javascript'>
    window.location.href='./../../resetpassword.php';
    </script>";

    $alertaCorrectoAdmin = "<script type='text/javascript'>
    window.location.href='./../../access.php';
    </script>";

if ($pass == $pass2) {
    $update = "UPDATE usuarios SET contrasenia = '$pass' WHERE id = '$id'";
    $exeUp = mysqli_query($conexion,$update);
    echo $alertaCorrectoAdmin;
    header('Location:./../../access.php');
} else {
    echo $alertaIncorrecto;
    header('Location:./../../resetpassword.php');
}

mysqli_close($conexion);
