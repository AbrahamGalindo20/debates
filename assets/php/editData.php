<?php
    include 'conexion.php'; 
    $conexion = conectar();
    $edad = $_POST['age'];  
    $id = $_POST['id'];
    $email  = $_POST['email'];


    $updateDatos = "UPDATE usuarios SET edad = '$edad', email = '$email' WHERE id = '$id'";
    $ejecutarSolicitud = mysqli_query($conexion,$updateDatos); 
    header('Location:./../../rooms.php');
    //mysqli_free_result($filasUsuarios);
    mysqli_close($conexion);
?>