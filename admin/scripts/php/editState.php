<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$id = $_POST['id'];
$name = $_POST['username'];
$state = $_POST['estado'];

$texto = "bloqueoUsuarios.php";
$alertaIncorrecto = "<script type='text/javascript'>
alert('Verificar los datos ya que no es posible realizar la edicion de datos');
window.location.href='./../sesion/$texto';
</script>";
$alertaCorrecto = "<script type='text/javascript'>
alert('Edicion del usuario correcta, ya ha sido Bloqueado/Desbloqueado');
window.location.href='./../sesion/$texto';
</script>";
$sqlState = "SELECT * FROM estadousuarios WHERE username = '$name'";
$executeState = mysqli_query($conexion, $sqlState);
$assoc = mysqli_fetch_assoc($executeState);
$estado = $assoc['state'];
if ($estado ==  NULL || $estado == '' || $estado == " ") {
    $insertarDatos = "INSERT INTO estadousuarios (id_usuario, username,state) 
    VALUES('$id', '$name', '$state')";
        $ejecutarSolicitud = mysqli_query($conexion, $insertarDatos);
} else {
    $updateDatos = "UPDATE estadousuarios SET state = '$state' WHERE id_usuario = '$id' OR username = '$name'";
    $ejecutarSolicitud = mysqli_query($conexion, $updateDatos);
}

echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
