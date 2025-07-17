<?php
    include 'conexion.php'; 
    $conexion = conectar();
    $usuario = $_POST['usuario'];  
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $alertaIncorrecto = "<script type='text/javascript'>
    alert('Las contraseñas son diferentes, para poder registrarte deben de ser igual');
    window.location.href='registro.html';
    </script>";
    $alertaCorrecto = "<script type='text/javascript'>
    alert('Registro Exitoso, ya puedes iniciar sesion');
    window.location.href='iniciosesion.html';
    </script>";
    $alertaUsuario = "<script type='text/javascript'>
    alert('El usuario ya existe, favor de crear otro');
    window.location.href='registro.html';
    </script>";
    $obtenerDatos = "SELECT * FROM perfil WHERE id_usuario = '$usuario'";
    $ejecutarDatos = mysqli_query($conexion,$obtenerDatos);
     $filasUsuarios = mysqli_num_rows($ejecutarDatos);
    if ($filasUsuarios){
        echo $alertaUsuario;}
    else{
        if($password != $password2){
        echo $alertaIncorrecto;}
    else{
        $insertarDatos = "INSERT INTO perfil (id_usuario, correo_electronico,contrasenia) 
        VALUES('$usuario','$correo','$password')";
        $ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
       echo $alertaCorrecto;}}
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>