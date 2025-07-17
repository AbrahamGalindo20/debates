<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion == '') {
    $alerta = "<script type='text/javascript'>
		alert('Acceso incorrecto');
		</script>";
    echo $alerta;
    header('Location:./../../../index.php');
    die();
}
include './../../assets/php/conexion.php';
$conexion = conectar();
?>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Abraham Galindo">
    <meta name="copyright" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es">
    <meta name="description" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es Sistema de Debates Online abierto para todo el publico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BackOffice DebateOnline.es</title>
    <link rel="icon" type="image/png" href="./../../assets/img/ico/favicon.png">
    <link rel="shortcut icon" href="./../../assets/img/ico/favicon.png">
    <link rel="stylesheet" href="./../../assets/css/style.css">
</head>

<body>
    <div class="area">
        <div class="container-xl">
            <div class="wrapper">
                <div class="blueBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Administradores</p>
                        <button class="bottonBlue" onclick="window.location.href='administradores.php'">Consultar</button>
                    </div>
                </div>
                <div class="greenBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Datos Usuarios</p>
                        <button class="bottonGreen" onclick="window.location.href='usuarios.php'">Consultar</button>
                    </div>
                </div>
                <div class="yellowBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Bloqueo Usuarios</p>
                        <button class="bottonYellow" onclick="window.location.href='bloqueoUsuarios.php'">Consultar</button>
                    </div>
                </div>
                <div class="orangeBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Estadisticas IP</p>
                        <button class="bottonorange" onclick="window.location.href='estadisticas.php'">Consultar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="wrapper">
                <div class="blueBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Administrar Salas</p>
                        <button class="bottonBlue" onclick="window.location.href='salas.php'">Consultar</button>
                    </div>
                </div>
                <div class="greenBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Administrar Encuestas</p>
                        <button class="bottonGreen" onclick="window.location.href='encuestas.php'">Consultar</button>
                    </div>
                </div>
                <div class="yellowBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Administrar Noticias</p>
                        <button class="bottonYellow" onclick="window.location.href='noticias.php'">Consultar</button>
                    </div>
                </div>
                <div class="orangeBack">
                    <p class="textWrapperTitle">Consulta</p>
                    <div class="textWrapper">
                        <p class="textPedido">Administrar Anuncios</p>
                        <button class="bottonorange" onclick="window.location.href='anuncios.php'">Consultar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="./login.php">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        <?php
                        $correo =  $_SESSION['usuario'];
                        $selectDatos = "SELECT * FROM admin WHERE email = '$correo'";
                        $resultadoDatos = mysqli_query($conexion, $selectDatos);
                        $row = mysqli_fetch_assoc($resultadoDatos);
                        ?>
                        <?php echo $row['username']; ?>
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./administradores.php">
                    <i class="fa fa-laptop"></i>
                    <span class="nav-text">
                        Administradores
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./usuarios.php">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">
                        Usuarios
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="./bloqueoUsuarios.php">
                    <i class="fa fa-ban"></i>
                    <span class="nav-text">
                        Bloquear Usuarios
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./estadisticas.php">
                    <i class="fa fa-signal"></i>
                    <span class="nav-text">
                        Estadisticas IP
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./salas.php">
                    <i class="fa fa-search-plus"></i>
                    <span class="nav-text">
                        Administrar Salas
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./encuestas.php">
                    <i class="fa fa-file-text"></i>
                    <span class="nav-text">
                        Administrar Encuestas
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./anuncios.php">
                    <i class="fa fa-bell"></i>
                    <span class="nav-text">
                        Administrar Anuncios
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./noticias.php">
                    <i class="fa fa-bullhorn"></i>
                    <span class="nav-text">
                        Administrar Noticias
                    </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="../../assets/php/cerrarSesion.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Cerrar Sesión
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>