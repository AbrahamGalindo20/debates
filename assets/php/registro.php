<?php
    include 'conexion.php'; 
    $conexion = conectar();
    $name = $_POST['name'];  
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $email  = $_POST['email'];
    $pass = $_POST['pass'];
    $estado = $_POST['estado'];

    $insertarDatos = "INSERT INTO usuarios (username, edad,sexo,email,contrasenia,estado) 
    VALUES('$name','$age','$sex','$email','$pass','$estado')";
    $ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
    header('Location:./../../index.php');
    //mysqli_free_result($filasUsuarios);
    mysqli_close($conexion);
?>