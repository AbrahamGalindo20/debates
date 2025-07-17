<?php
    include 'conexion.php'; 
    $conexion = conectar();
    $id = $_POST['id'];
    $estado = $_POST['estado'];

    $updateDatos = "UPDATE usuarios SET estado = '$estado' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion,$updateDatos); 
    header('Location:./cerrarSesion.php');
    //mysqli_free_result($filasUsuarios);
    mysqli_close($conexion);
?>