<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['id'];
if ($varsesion == null || $varsesion == '') {
    $alerta = "<script type='text/javascript'>
		alert('Acceso incorrecto');
		</script>";
    echo $alerta;
    header('Location:./index.php');
    die();
}
include "./assets/php/conexion.php";
$conectar = conectar();

date_default_timezone_set('Europe/Madrid');
$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$username = $_SESSION['id'];
$accion = "Ingreso a encuestas";

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$dispositivos = array(
    'Mobile' => 'Teléfono móvil',
    'Tablet' => 'Tableta',
    'iPad' => 'iPad',
    'iPhone' => 'iPhone',
    'Android' => 'Android',
    'Windows Phone' => 'Windows Phone',
    'Macintosh' => 'Mac',
    'Windows NT' => 'Windows',
    'Linux' => 'Linux'
);
$tipo_dispositivo = 'Desconocido';
foreach ($dispositivos as $clave => $valor) {
    if (strpos($user_agent, $clave) !== false) {
        $tipo_dispositivo = $valor;
        break;
    }
}

$insert = "INSERT INTO estadisticasip (username,ip,navegador,dispositivo,fecha,hora,accion) 
VALUES ('$username','$ip','$navegador','$tipo_dispositivo','$fecha','$hora','$accion');";
$execute = mysqli_query($conectar, $insert);
?>
<!DOCTYPE html>
<html>

<head>
    <title>DebateOnline.es</title>

    <link rel="icon" type="image/png" href="./assets/img/ico/favicon.png">
    <link rel="shortcut icon" href="./assets/img/ico/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Abraham Galindo">
    <meta name="copyright" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es">
    <meta name="description" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es Sistema de Debates Online abierto para todo el publico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .redes {
            display: grid;
            justify-content: center;
            grid-template-columns: 50px 50px 50px 50px 50px;
            grid-template-rows: 25px;
            text-align: center;
            margin-top: -15px;
            margin-right: 400px;
            margin-left: 50px;
            grid-column-gap: 5px;
        }

        #chatbox {
            width: 500px;
            height: 300px;
            border: 1px solid white;
            overflow-y: scroll;
            margin-left: 400px;
        }

        .arrow-button {
            position: relative;
            display: inline-block;
            padding: 10px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
        }

        .arrow {
            position: absolute;
            top: 50%;
            right: 6px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 8px solid #fff;
            margin-left: 3px;
        }

        .reply-btn {
            width: 20px;
            height: 20px;
            background-color: #FFF;
            border-radius: 50%;
            border: none;
            display: inline-block;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .selectI {
            border: 2px solid #e2f0f0;
            margin-left: -50px;
            transition: border-color 0.3s ease;
            font-size: 15px;
            text-align: justify;
            padding-bottom: 4px;
            width: 600px;
            height: 35px;
            margin-top: 20px;
            margin-bottom: 50px;
            margin-left: -150px;
            background-color: #e2f0f0;
        }

        .reply-btn::before {
            content: "\2BAA";
            /* Código unicode para la flecha hacia la izquierda */
            font-size: 30px;
        }

        /* Estilos CSS */
        footer {
            display: flex;
            padding: 5px 10px;
            background-color: #f2f8f8;
            color: #fff;
            margin-top: 100px;
        }

        footer a {
            font-size: 15px;
            color: #5a505b;
            text-decoration: none;
        }

        footer a:hover {
            font-size: 15px;
            color: #186fa6;
            text-decoration: none;
        }

        footer p {
            flex: 1;
            margin: 0;
        }

        footer ul {
            flex: 1;
            display: flex;
            justify-content: space-around;
            margin: 0;
            align-items: left;
            padding-left: 0;
            list-style: none;
        }

        /* Estilos CSS */
        footer {
            display: flex;
            padding: 5px 10px;
            background-color: #f2f8f8;
            color: #fff;
            margin-top: 20px;
        }

        footer a {
            font-size: 15px;
            color: #5a505b;
            text-decoration: none;
        }

        footer a:hover {
            font-size: 15px;
            color: #186fa6;
            text-decoration: none;
        }

        footer p {
            flex: 1;
            margin: 0;
        }

        footer ul {
            flex: 1;
            display: flex;
            justify-content: space-around;
            margin: 0;
            align-items: left;
            padding-left: 0;
            list-style: none;
        }

        body {
            font-family: 'Roboto', sans-serif;

            width: 100%;
            height: 500px;
            overflow-x: hidden;
        }

        .salaTitle {
            font-weight: bolder;
            color: #333;
            margin-top: 30px;
            margin-left: 20px;
            font-size: 20px;
        }

        .salaSubtitle {
            color: #333;
            margin-top: 10px;
            margin-left: 20px;
        }

        .salaSubSubtitle {
            color: #333;
            margin-top: 10px;
            margin-left: 20px;
            font-size: 15px;
            font-style: italic;
        }

        .divisorRooms {
            display: grid;
            justify-content: center;
            grid-template-columns: 300px 300px;
            grid-template-rows: 300px 300px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 10px;
            grid-column-gap: 80px;
            grid-row-gap: 50px;
        }

        .divisorNotice {
            display: grid;
            justify-content: center;
            grid-template-columns: 280px;
            grid-template-rows: 40px;
            text-align: justify;
            margin-top: 30px;
            margin-bottom: 10px;
            grid-column-gap: 0px;
            grid-row-gap: 40px;
        }

        .adsOne {
            display: grid;
            justify-content: center;
            grid-template-columns: 250px;
            grid-template-rows: 250px;
            text-align: justify;
        }

        .adsTwo {
            display: grid;
            justify-content: center;
            grid-template-columns: 250px 250px;
            grid-template-rows: 250px;
            text-align: center;
            margin-top: 25px;
            margin-left: 250px;
            grid-gap: 80px;
        }

        .adsThree {
            display: grid;
            justify-content: center;
            grid-template-columns: 500px;
            grid-template-rows: 300px;
            text-align: center;
            margin-top: -20px;
            margin-left: 160px;
            grid-gap: 80px;
        }

        .test {
            display: grid;
            justify-content: center;
            grid-template-columns: 800px;
            grid-template-rows: 100px;
            text-align: center;
            margin-top: 20px;
            margin-left: 500px;
        }

        .test2 {
            display: grid;
            justify-content: center;
            grid-template-columns: 800px;
            grid-template-rows: 10px;
            text-align: center;
            margin-top: -30px;
            margin-bottom: 90px;
            margin-left: 600px;

        }

        .titleTest {
            font-size: 16px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 10px;
            margin-left: -50px;
            font-weight: bolder;
        }

        .iconsTest {
            display: grid;
            justify-content: center;
            grid-template-columns: 25px 25px;
            grid-template-rows: 50px;
            grid-column-gap: 30px;
            margin-left: 280px;
        }

        .progressTest {
            display: grid;
            justify-content: center;
            grid-template-columns: 500px;
            grid-template-rows: 50px;
            grid-column-gap: 30px;
            margin-left: 60px;
            margin-top: -30px;
            color: #007bff;
        }

        .testInfo {
            display: flex;
            flex-direction: row;
            flex-flow: row wrap;
        }

        .data {
            display: flex;
            flex-direction: row;
            flex-flow: row wrap;
        }

        .room {
            background-color: #f2f8f8;
        }

        .titleRoom {
            font-size: 13px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 10px;
            margin-left: 25px;
            font-weight: bolder;
        }

        .titleNotice {
            font-size: 12px;
            color: rgba(0, 0, 0, 0.8);
            text-align: justify;
            margin-top: -36px;
            margin-left: 70px;
            font-weight: bolder;
        }

        .dateNotice {
            font-size: 10px;
            color: rgba(0, 0, 0, 0.5);
            text-align: justify;
            margin-top: -15px;
            margin-left: 70px;
            font-weight: bolder;
        }

        .descriptionRoom {
            font-size: 13px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: -10px;
            margin-left: 25px;
            font-weight: 500;
        }

        .titleRoomIzq {
            font-size: 12px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 5px;
            margin-left: 10px;
            font-weight: bolder;
        }

        .titleRoomDer {
            font-size: 13px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: -37px;
            margin-left: 46px;
            font-weight: bolder;
        }


        .descriptionRoomIzq {
            font-size: 10px;
            color: rgba(0, 0, 0, 0.5);
            text-align: left;
            margin-top: -15px;
            margin-left: 10px;
            font-weight: 500;
        }

        .titleTestIzq {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 10px;
            margin-left: 30px;
            font-weight: normal;
        }

        .descriptionTestIzq {
            font-size: 14px;
            color: rgba(0, 0, 0, 0.5);
            text-align: left;
            margin-top: 30px;
            margin-left: -195px;
            font-weight: 500;
        }


        .itemsRoom {
            display: grid;
            justify-content: center;
            grid-template-columns: 90px 90px 90px;
            grid-template-rows: 50px;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 10px;
            grid-column-gap: 5px;
        }

        .submit-button {
            background-color: #fff;
            color: #09a5a7;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            width: 50px;
            height: 50px;
            margin-left: 20px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bolder;
        }

        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f8f8;
        }

        header {
            background-color: #f2f8f8;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 80px;
            margin-left: 50px;
        }

        nav {
            float: left;
            width: 20%;
            background-color: #f2f8f8;
            padding: 20px;
            height: 500px;

        }

        .nav2 {
            float: right;
            width: 22%;
            background-color: #f2f8f8;
            padding: 20px;
            height: 1000px;

        }

        .nav3 {
            float: bottom;
            width: 1300px;
            background-color: #f2f8f8;
            padding: 20px;
            height: 20%;

        }

        nav ul {
            list-style-type: none;
            padding: 2;
            margin-left: 0px;
        }

        nav ul li a {
            text-decoration: none;
            color: #3c8dbc;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        content {
            margin-left: 300px;
            padding: 20px;
        }

        content h1 {
            margin-left: 340px;
            font-size: 25px;
        }

        content p {
            text-align: center;
            margin-top: 10px;
            font-size: 25px;
            font-weight: 800;
            color: #3c8dbc;
        }

        form {
            margin-left: 500px;
            margin-top: 20px;
            width: 100%;
        }

        .back-link {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 20px;
            padding: 10px;
            background-color: #f2f8f8;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .imageRoom {
            width: 300px;
            height: 120px;
        }

        .imageNotice {
            width: 68px;
            height: 46px;
        }

        .numberRoom {
            background-color: rgb(49, 50, 50);
            width: 30px;
            height: 30px;
            align-items: center;
            display: flex;
            justify-content: center;
            font-size: 25px;
            font-weight: bolder;
            color: #FFF;
            font-style: italic;
            margin-left: -30px;
        }

        .help-circle {
            width: 38px;
            height: 38px;
            margin: 0 16px 9px 0;
            background-color: rgb(240, 144, 14);
        }

        .progress-containerGreen {
            width: 100%;
            background-color: #FFF;
            height: 45px;
            border-radius: 20px;
            position: relative;
            margin-left: -30px;
            border: 2px solid rgb(0, 180, 27);
        }

        .progress-barGreen {
            width: 0;
            height: 100%;
            background-color: rgb(0, 180, 27);
            border-radius: 20px;
            position: relative;
            color: #FFF;
            font-size: 15px;
            font-weight: 800;
            display: grid;
            place-items: center;
        }

        .progress-containerRed {
            width: 100%;
            background-color: #FFF;
            height: 45px;
            border-radius: 20px;
            position: relative;
            margin-left: -30px;
            margin-top: 40px;
            border: 2px solid rgb(199, 13, 13);
        }

        .progress-barRed {
            width: 0;
            height: 100%;
            background-color: rgb(199, 13, 13);
            border-radius: 20px;
            position: relative;
            color: #FFF;
            font-size: 15px;
            font-weight: 800;
            display: grid;
            place-items: center;
        }

        .emojiGreen {
            font-size: 48px;
            line-height: 30px;
            position: absolute;
            left: 0;
        }

        .emojiRed {
            font-size: 48px;
            line-height: 30px;
            position: absolute;
            left: 0;
        }

        .percent {
            height: 50%;
            width: 50%;
            margin: 0px auto;
        }

        .divWinnerGreen {
            background-color: rgb(0, 180, 27);
            border-radius: 50px;
            width: 65px;
            height: 65px;
            margin-top: -15px;
            margin-left: -35px;
        }

        .divWinnerRed {
            background-color: rgb(199, 13, 13);
            border-radius: 50px;
            width: 65px;
            height: 65px;
            margin-top: -15px;
            margin-left: 5px;
        }

        .smileWinner {
            font-size: 60px;
            color: rgb(255, 255, 255);
            margin-top: 2px;
        }

        .sadWinner {
            font-size: 60px;
            color: rgb(255, 255, 255);
            margin-top: 2px;
        }

        .smileLosser {
            font-size: 40px;
            color: rgba(0, 0, 0, 0.2);
            margin-top: 5px;
        }

        .sadLosser {
            font-size: 40px;
            color: rgba(0, 0, 0, 0.2);
            margin-top: 5px;
        }

        .divLosser {
            background-color: rgb(255, 255, 255);
            border-radius: 50px;
            width: 50px;
            height: 50px;
            margin-top: -10px;
            margin-left: -5px;
        }

        .roomA {
            text-decoration: none;
        }

        .perfil-button {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-image: url('./assets/img/sliders/uno.jpg');
            background-size: cover;
            background-position: center;
            cursor: pointer;
            margin-right: 50px;
        }

        .boton-cuadrado {
            width: 45px;
            height: 45px;
            background-color: #F2F8F8;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-left: -20px;
            margin-right: 15px;
        }

        .boton-cuadrado i {
            color: #3c8dbc;
            font-size: 30px;
        }

        .botones {
            display: flex;
            align-items: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <a class="roomA" href="rooms.php"><img src="./assets/img/logos/logo2.jpg" alt="Logo de la empresa"></a>
        <div class="botones">
            <a class="roomA" href="profileEdit.php">
                <div class="perfil-button"></div>
            </a>
            <a class="roomA" href="./assets/php/cerrarSesion.php">
                <div class="boton-cuadrado"><i class="fa fa-home"></i></div>
            </a>
        </div>
    </header>


    <nav>
        <ul style="color: #333;">
            <a class="roomA" href="rooms.php"> SALAS<br><br></a>
            <?php
            $conectar = conectar();
            $sqlSentence = "SELECT * FROM salas WHERE estado = 'Vigente' ORDER BY numero";
            $sqlExecute = mysqli_query($conectar, $sqlSentence);
            while ($sqlAssoc = mysqli_fetch_assoc($sqlExecute)) {
                $numeroSala = $sqlAssoc['numero'];
                $temaSala = $sqlAssoc['tema'];
            ?>
                <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>">
                    <h5 class="titleRoomIzq">Sala <?php echo $numeroSala; ?></h5>
                </a>
                <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>">
                    <h5 class="descriptionRoomIzq"><?php echo $temaSala; ?></h5>
                </a>
            <?php } ?>
        </ul>
    </nav>
    </nav>
    <nav class="nav2">
        <ul>
            <b style="font-size: 15px;">ENCUESTAS ANTERIORES</b>
            <br><br><br>
            <main class="divisorNoticeTest">
                <?php
                $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'encuestas' AND idAnuncio = '1'";
                $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
                $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
                $anuncio1 = $assocAnuncios['linkImagen'];
                $linkAnuncio1 = $assocAnuncios['linkAnuncio'];
                $sqlSentence = "SELECT * FROM encuestas";
                $sqlExecute = mysqli_query($conectar, $sqlSentence);
                $id = 0;
                while ($sqlAssoc = mysqli_fetch_assoc($sqlExecute)) {
                    $temaEncuesta = $sqlAssoc['tema'];
                    $noSala = $sqlAssoc['sala'];
                    if ($id == 4) {
                ?>
                        <main class="adsOne">
                            <a class="roomA" href="<?php echo $linkAnuncio1; ?>">
                                <img src="<?php echo $anuncio1; ?>" width="250px" height="200px">
                            </a>
                        </main>
                        <div class="data">
                            <i class="fa fa-question-circle" style="font-size:40px; color:rgb(240, 144, 14);"></i>
                            <a class="roomA" href="<?php echo "./test.php?it=" . $noSala; ?>">
                                <h5 class="titleRoomDer"><?php echo $temaEncuesta; ?></h5>
                            </a>
                        </div>
                    <?php } else {
                    ?>

                        <div class="data">
                            <i class="fa fa-question-circle" style="font-size:40px; color:rgb(240, 144, 14);"></i>
                            <a class="roomA" href="<?php echo "./test.php?it=" . $noSala; ?>">
                                <h5 class="titleRoomDer"><?php echo $temaEncuesta; ?></h5>
                            </a>
                        </div>
                <?php
                    }
                    $id = $id + 1;
                } ?>
            </main>
        </ul>
    </nav>
    <content>
        <p>Selecciona una encuesta</p>

        <form id="" action="">
            <select class="selectI" id="enlaces" onchange="abrirEnlace();">
                <?php
                $it = $_GET['it'];
                $sqlSelect = "SELECT * FROM encuestas WHERE id = '$it'";
                $sqlDataSelect = mysqli_query($conectar, $sqlSelect);
                $dataSelect = mysqli_fetch_assoc($sqlDataSelect);
                $temaSelect = $dataSelect['tema'];
                ?>
                <option value="<?php echo $it; ?>" selected><?php echo $temaSelect; ?></option>
                <?php
                $sqlSentence2 = "SELECT * FROM encuestas WHERE id <> '$it'";
                $sqlExecute2 = mysqli_query($conectar, $sqlSentence2);
                while ($row = mysqli_fetch_assoc($sqlExecute2)) {
                    $tema = $row['tema'];
                    $numero = $row['id'];
                ?>
                    <option value="<?php echo $numero; ?>"><?php echo $tema; ?></option>
                <?php } ?>
            </select>
        </form>
    </content>
    <content>
        <?php
        $sqlCountYes = "SELECT COUNT(respuesta) AS countYes FROM encuestasestadisticas WHERE id_test = '$it' AND respuesta = 1";
        $sqlExecuteYes = mysqli_query($conectar, $sqlCountYes);
        $dataYes = mysqli_fetch_assoc($sqlExecuteYes);
        $Yes = $dataYes['countYes'];
        $sqlCountNo = "SELECT COUNT(respuesta) AS countNo FROM encuestasestadisticas WHERE id_test = '$it' AND respuesta = 2";
        $sqlExecuteNo = mysqli_query($conectar, $sqlCountNo);
        $dataNo = mysqli_fetch_assoc($sqlExecuteNo);
        $No = $dataNo['countNo'];
        $Total = $Yes + $No;
        $PercentYes = ($Yes * 100) / $Total;
        $PercentNo = ($No * 100) / $Total;
        $PercentYes = round($PercentYes, 2);
        $PercentNo = round($PercentNo, 2);
        $sqlTema = "SELECT * FROM encuestas WHERE id = '$it'";
        $sqlTema2 = mysqli_query($conectar, $sqlTema);
        $data = mysqli_fetch_assoc($sqlTema2);
        $temaS = $data['tema'];
        ?>
        <main class="test2">
            <h5 class="titleTest"><?php echo $temaS; ?></h5>
        </main>
        <main class="test">
            <div class="testInfo">
                <i class="fa fa-question-circle" style="font-size:40px; color:rgb(240, 144, 14);"></i>
                <h5 class="titleTestIzq">GRACIAS POR TU RESPUESTA</h5>
                <h5 class="descriptionTestIzq"></h5>
                <main class="iconsTest">
                    <?php
                    if ($PercentYes > $PercentNo) {
                        $GreenClass = "divWinnerGreen";
                        $emojiGreen = "smileWinner";
                        $RedClass = "divLosser";
                        $emojiRed = "sadLosser";
                    }
                    if ($PercentYes < $PercentNo) {
                        $GreenClass = "divLosser";
                        $emojiGreen = "smileLosser";
                        $emojiRed = "sadWinner";
                        $RedClass = "divWinnerRed";
                    }
                    if ($PercentYes == $PercentNo) {
                        $GreenClass = "divWinnerGreen";
                        $emojiGreen = "smileWinner";
                        $emojiRed = "sadWinner";
                        $RedClass = "divWinnerRed";
                    }
                    ?>
                    <div class="<?php echo $GreenClass; ?>"><i class="fa fa-smile-o <?php echo $emojiGreen ?>"></i></div>
                    <div class="<?php echo $RedClass; ?>"><i class="fa fa-frown-o <?php echo $emojiRed; ?>"></i></div>
                </main>
            </div>
        </main>
        <main class="test">
            <div class="testInfo">
                <main class="progressTest">
                    <div class="progress-containerGreen">
                        <div class="emojiGreen"><i class="fa fa-smile-o" style="color:rgb(0, 180, 27);"></i></div>
                        <div class="progress-barGreen" id="progress-barGreen"><?php echo $PercentYes; ?></div>
                    </div>
                    <div class="progress-containerRed">
                        <div class="emojiRed"><i class="fa fa-frown-o" style="color:rgb(199, 13, 13);"></i></div>
                        <div class="progress-barRed" id="progress-barRed"><?php echo $PercentNo; ?></div>
                    </div>
                </main>
            </div>
        </main>
    </content>
    <content>
        <main class="adsTwo">
            <?php
            $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'sala4' AND idAnuncio = '2'";
            $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
            $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
            $anuncio2 = $assocAnuncios['linkImagen'];
            $linkAnuncio2 = $assocAnuncios['linkAnuncio'];
            $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'sala4' AND idAnuncio = '3'";
            $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
            $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
            $anuncio3 = $assocAnuncios['linkImagen'];
            $linkAnuncio3 = $assocAnuncios['linkAnuncio'];
            $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'sala4' AND idAnuncio = '4'";
            $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
            $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
            $anuncio4 = $assocAnuncios['linkImagen'];
            $linkAnuncio4 = $assocAnuncios['linkAnuncio'];
            ?>
            <div> <a class="roomA" href="<?php echo $linkAnuncio2; ?>"><img src="<?php echo $anuncio2; ?>" width="250px" height="200px"></a></div>
            <div> <a class="roomA" href="<?php echo $linkAnuncio3; ?>"><img src="<?php echo $anuncio3; ?>" width="250px" height="200px"></a></div>
        </main>
    </content>
    <content>
        <main class="adsThree">
            <div> <a class="roomA" href="<?php echo $linkAnuncio4; ?>"><img src="<?php echo $anuncio4; ?>" width="600px" height="300px"></a></div>
        </main>
    </content>
    <footer>
        <main class="redes">
            <div><a href="https://www.facebook.com/profile.php?id=61551598201084"><img src="./assets/img/redes/facebook.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.instagram.com/debate.online.es/"><img src="./assets/img/redes/instagram.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.tiktok.com/@debateonline.es"><img src="./assets/img/redes/tiktok.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.youtube.com/channel/UCHydIgCwA0DBrpb-Mf9ZMBA"><img src="./assets/img/redes/youtube.png" width="40px" height="30px"></a></div>
            <div><a href="contacto@debateonline.es"><img src="./assets/img/redes/gmail.png" width="60px" height="30px"></a></div>
        </main>
        <ul>
            <li><a href="terms.php">Condiciones general</a></li>
            <li><a href="privacy.php">Política de privacidad</a></li>
            <li><a href="cookies.php">Uso de cookies</a></li>
            <li><a href="help.php">Ayuda</a></li>
            <li><a href="contact.php">Contacto</a></li>
        </ul>
    </footer>
    <script>
        function abrirEnlace() {
            // Obtener el elemento select
            var selectElement = document.getElementById("enlaces");

            // Obtener el valor seleccionado
            var selectedValue = selectElement.value;
            var link = "./test.php?it=" + selectedValue;


            window.location.href = link;

        }
        // Green
        var progressValueGreen = "<?php echo $PercentYes; ?>"; // Cambia este valor para ajustar el progreso

        var progressBarGreen = document.getElementById("progress-barGreen");
        progressBarGreen.style.width = progressValueGreen + "%";

        // Actualizar la posición del emoji
        var emojiGreen = document.querySelector(".emojiGreen");
        emojiGreen.style.left = progressValueGreen + "%";

        // Red
        var progressValueRed = "<?php echo $PercentNo; ?>"; // Cambia este valor para ajustar el progreso

        var progressBarRed = document.getElementById("progress-barRed");
        progressBarRed.style.width = progressValueRed + "%";

        // Actualizar la posición del emoji
        var emojiRed = document.querySelector(".emojiRed");
        emojiRed.style.left = progressValueRed + "%";
    </script>
</body>

</html>