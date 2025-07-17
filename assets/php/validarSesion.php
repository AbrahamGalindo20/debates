<?php
session_start();
include 'conexion.php';
$conexion = conectar();
$usuario = $_POST['name'];
$password = $_POST['pass'];

$alertaCorrectoAdmin = "<script type='text/javascript'>
    window.location.href='./../../rooms.php';
    </script>";
    $alertaIncorrecto = "<script type='text/javascript'>
    window.location.href='./../../index.php';
    </script>";

$obtenerDatos = "SELECT * FROM usuarios WHERE email = '$usuario' AND contrasenia = '$password'";
$ejecutarDatos = mysqli_query($conexion,$obtenerDatos);
$row = mysqli_fetch_assoc($ejecutarDatos);
$id = $row['id'];
$state = $row['estado'];
$filasUsuarios = mysqli_num_rows($ejecutarDatos);
$_SESSION['id'] = $id;
if($filasUsuarios){
       // Verifica si se ha seleccionado "Recordarme"
       if (isset($_POST['myCheckbox'])) {
        // Crea una cookie para almacenar la contraseña
        setcookie("name", $usuario, time() + (86400 * 30));
        setcookie("pass", $password, time() + (86400 * 30)); // Caduca en 30 días (86400 segundos = 1 día)
    }
    if($state == "habilitado"){
    echo $alertaCorrectoAdmin;
    header('Location:./../../rooms.php');
    }
    if($state == "deshabilitado"){
        echo $alertaIncorrecto;
        header('Location:./../../index.php');
    }
}else{
    echo $alertaIncorrecto;
    header('Location:./../../index.php');
}

// Comprueba si ya existe una cookie con la contraseña guardada
if (isset($_COOKIE['password'])) {
    // Establece el valor de la contraseña desde la cookie
    $password = $_COOKIE['password'];
} else {
    // Establece un valor predeterminado para la contraseña
    $password = '';
}
//mysqli_free_result($filasUsuarios);
mysqli_close($conexion);
?>