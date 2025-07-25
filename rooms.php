<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['id'];
if ($varsesion == null || $varsesion == '') {
    $alerta = "<script type='text/javascript'>
		alert('Acceso incorrecto');
		</script>";
    echo $alerta;
    header('Location:./../../../index.php');
    die();
}
$valor = $_GET['dat'];

include "./assets/php/conexion.php";
$conectar = conectar();

date_default_timezone_set('Europe/Madrid');
$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$username = $_SESSION['id'];
$accion = "Ingreso a Salas";

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
        footer {
            display: flex;
            padding: 5px 10px;
            background-color: #FFF;
            color: #fff;
            margin-top: 300px;
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
            grid-template-rows: 50px;
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
            grid-template-rows: 200px;
            text-align: justify;
        }

        .adsTwo {
            display: grid;
            justify-content: center;
            grid-template-columns: 250px 250px;
            grid-template-rows: 250px;
            text-align: center;
            margin-top: 50px;
            margin-left: 250px;
            grid-gap: 80px;
        }

        .data {
            display: flex;
            flex-direction: row;
            flex-flow: row wrap;
            width: 200;
            height: 56px;
        }

        .room {
            background-color: #F2F8F8;
        }

        .titleRoom {
            font-size: 13px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 10px;
            margin-left: 10px;
            font-weight: bolder;
        }

        .titleNotice {
            font-size: 12px;
            color: rgba(0, 0, 0, 0.8);
            text-align: justify;
            margin-top: -45px;
            margin-left: 90px;
            font-weight: bolder;
        }

        .dateNotice {
            font-size: 10px;
            color: rgba(0, 0, 0, 0.5);
            text-align: justify;
            margin-top: -20px;
            margin-left: 90px;
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

        .descriptionRoomIzq {
            font-size: 10px;
            color: rgba(0, 0, 0, 0.5);
            text-align: left;
            margin-top: -15px;
            margin-left: 10px;
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
            background-color: #F2F8F8;
        }

        header {
            background-color: #F2F8F8;
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
            background-color: #F2F8F8;
            padding: 20px;
            height: 500px;

        }

        .nav2 {
            float: right;
            width: 22%;
            background-color: #F2F8F8;
            padding: 20px;
            height: 1000px;

        }

        .nav3 {
            float: bottom;
            width: 1300px;
            background-color: #F2F8F8;
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
        }

        footer {
            background-color: #F2F8F8;
            padding: 10px;
            text-align: center;
            margin-top: 40px;
        }

        .back-link {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 20px;
            padding: 10px;
            background-color: #F2F8F8;
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

        .formTest {
            margin-left: 40px !important;
            margin-top: 20px;
        }

        .selectTest {
            border: 2px solid #e2f0f0;
            margin-left: -50px;
            transition: border-color 0.3s ease;
            font-size: 15px;
            text-align: justify;
            padding-bottom: 4px;
            width: 200px;
            height: 35px;
            margin-top: 20px;
            margin-bottom: 50px;
            margin-left: -40px;
            background-color: #e2f0f0;
        }
    </style>
</head>
<script>
    function abrirEnlace() {
        // Obtener el elemento select
        var selectElement = document.getElementById("enlaces");

        // Obtener el valor seleccionado
        var selectedValue = selectElement.value;
        var link = "./historico_debates.php?it=" + selectedValue;
        window.location.href = link;

    }

    function abrirEnlace2() {
        // Obtener el elemento select
        var selectElement = document.getElementById("enlaces2");

        // Obtener el valor seleccionado
        var selectedValue = selectElement.value;
        var link = "./test.php?it=" + selectedValue;
        window.location.href = link;

    }
</script>

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
        <br>
        <ul style="color: #333;">
            <a class="roomA" href="rooms.php">HISTÓRICO DE DEBATES</a>
            <form id="formTest" class="formTest" action="GET">
                <select class="selectTest" id="enlaces" name="enlaces" onchange="abrirEnlace();">
                    <option selected>Selecciona un debate</option>
                    <?php
                    $sqlSentence2 = "SELECT * FROM salas";
                    $sqlExecute2 = mysqli_query($conectar, $sqlSentence2);
                    while ($row = mysqli_fetch_assoc($sqlExecute2)) {
                        $tema = $row['tema'];
                        $numero = $row['id'];
                    ?>
                        <option value="<?php echo $numero; ?>"><?php echo $tema; ?></option>
                    <?php } ?>
                </select>
            </form>
        </ul>
        <ul style="color: #333;">
            <a class="roomA" href="rooms.php">HISTÓRICO DE ENCUESTAS</a>
            <form id="formTest" class="formTest" action="">
                <select class="selectTest" id="enlaces2" name="enlaces2" onchange="abrirEnlace2();">
                    <option selected>Selecciona una encuesta</option>
                    <?php
                    $sqlSentence2 = "SELECT * FROM encuestas";
                    $sqlExecute2 = mysqli_query($conectar, $sqlSentence2);
                    while ($row = mysqli_fetch_assoc($sqlExecute2)) {
                        $tema = $row['tema'];
                        $numero = $row['id'];
                    ?>
                        <option value="<?php echo $numero; ?>"><?php echo $tema; ?></option>
                    <?php } ?>
                </select>
            </form>
        </ul>
    </nav>
    <nav class="nav2">
        <ul>
            <b style="font-size: 15px;">ACTUALIDAD</b>
            <main class="divisorNotice">
                <?php
                $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'general' AND idAnuncio = '1'";
                $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
                $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
                $anuncio1 = $assocAnuncios['linkImagen'];
                $linkAnuncio1 = $assocAnuncios['linkAnuncio'];
                $sqlSentence = "SELECT * FROM noticiasgenerales WHERE idRoom = 'Todas'";
                $sqlExecute = mysqli_query($conectar, $sqlSentence);
                $id = 0;
                while ($sqlAssoc = mysqli_fetch_assoc($sqlExecute)) {
                    $temaNoticia = $sqlAssoc['tema'];
                    $linkImagen = $sqlAssoc['linkImagen'];
                    $linkNoticia = $sqlAssoc['linkNoticia'];
                    $fecha = $sqlAssoc['fecha'];
                    $tipoAnuncio = $sqlAssoc['tipo'];
                    $idAnuncio = $sqlAssoc['id'];
                    if ($tipoAnuncio == "Anuncio") {
                        $conditional = "style= 'border: 2px dotted gray !important;'";
                        $conditionalText = "style='font-size:10px !important; color:gray; margin-top:-15px; margin-left:222px;'";
                    } else {
                        $conditional = "style= 'border: 0px dotted gray !important;'";
                        $conditionalText = "style='font-size:10px !important; color:gray; margin-top:-15px; margin-left:222px; display:none'";
                    }
                    if ($id == 4) {
                ?>
                        <main class="adsOne">
                            <div>
                                <a class="roomA" href="<?php echo $linkAnuncio1; ?>">
                                    <img src="<?php echo $anuncio1; ?>" width="250px" height="200px">
                                </a>
                            </div>
                        </main>
                        <div class="data" <?php echo $conditional; ?>>
                            <p <?php echo $conditionalText; ?>>Anuncio</p>
                            <a class="roomA" href="<?php echo $linkNoticia; ?>"><img src="<?php echo $linkImagen; ?>" class="imageNotice"></a>
                            <a class="roomA" href="<?php echo $linkNoticia; ?>">
                                <h5 class="titleNotice"><?php echo $temaNoticia; ?></h5>
                            </a>
                            <h5 class="dateNotice"><?php echo $fecha; ?></h5>
                        </div>
                    <?php } else {
                    ?>
                        <div class="data" <?php echo $conditional; ?>>
                            <p <?php echo $conditionalText; ?>>Anuncio</p>
                            <a class="roomA" href="<?php echo $linkNoticia; ?>"><img src="<?php echo $linkImagen; ?>" class="imageNotice"></a>
                            <a class="roomA" href="<?php echo $linkNoticia; ?>">
                                <h5 class="titleNotice"><?php echo $temaNoticia; ?></h5>
                            </a>
                            <h5 class="dateNotice"><?php echo $fecha; ?></h5>
                        </div>
                <?php
                    }
                    $id = $id + 1;
                } ?>
            </main>
        </ul>
    </nav>
    <content>
        <div class="salaTitle">Elige tu sala</div>
        <div class="salaSubtitle">Te proponemos estas salas de temas de actualidad para que participes. Si quieres hablar de algún tema en concreto ponte en contacto con nosotros.</div>
        <div class="salaSubSubtitle">Te pedimos que seas respetuoso, constructivo, usar un lenguaje educado y un tono cordial.</div>
        <main class="divisorRooms">
            <?php
            $sqlSentence = "SELECT * FROM salas WHERE estado = 'Vigente' ORDER BY numero";
            $sqlExecute = mysqli_query($conectar, $sqlSentence);
            $num = 1;
            while ($sqlAssoc = mysqli_fetch_assoc($sqlExecute)) {
                $numeroSala = $sqlAssoc['numero'];
                $temaSala = $sqlAssoc['tema'];
                $imagen = $sqlAssoc['imagen'];
                $nombreSala = "mensajes" . $numeroSala;
                $sqlUserCounter = "SELECT COUNT(DISTINCT user_id) AS usuarios FROM $nombreSala";
                $executeCounter = mysqli_query($conectar, $sqlUserCounter);
                $assocCounter = mysqli_fetch_assoc($executeCounter);
                $UserCounter = $assocCounter['usuarios'];
                if ($UserCounter >= 1000) {
                    $UserCounterT = $UserCounter . " " . "K";
                } else {
                    $UserCounterT = $UserCounter . " ";
                }
                $sqlMessageCounter = "SELECT COUNT(message) AS mensajes FROM $nombreSala";
                $executeCounter = mysqli_query($conectar, $sqlMessageCounter);
                $assocCounter = mysqli_fetch_assoc($executeCounter);
                $MessageCounter = $assocCounter['mensajes'];
                if ($MessageCounter >= 1000) {
                    $MessageCounterT = $MessageCounter . " " . "K";
                } else {
                    $MessageCounterT = $MessageCounter . " ";
                }
            ?>
                <div class="room">
                    <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>">
                        <div class="numberRoom"><?php echo $numeroSala; ?></div>
                    </a>
                    <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>"><img src="<?php echo $imagen; ?>" class="imageRoom"></a>
                    <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>">
                        <h5 class="titleRoom">Sala <?php echo $numeroSala; ?></h5>
                    </a>
                    <a class="roomA" href="<?php echo "chat" . $numeroSala . ".php"; ?>">
                        <h5 class="descriptionRoom"><?php echo $temaSala; ?></h5>
                    </a>
                    <main class="itemsRoom">
                        <div><?php echo $UserCounterT; ?><i class="fa fa-users" style="font-size:18px; color:rgb(9, 165, 167);"></i></div>
                        <div><?php echo $MessageCounterT; ?><i class="fa fa-comment-o" style="font-size:18px; color:rgb(237, 197, 40);"></i></div>
                        <div><a class="submit-button" href="<?php echo "chat" . $numeroSala . ".php"; ?>">Entrar</a></div>
                    </main>
                </div>
            <?php } ?>
        </main>
        <main class="adsTwo">
            <?php
            $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'general' AND idAnuncio = '2'";
            $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
            $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
            $anuncio2 = $assocAnuncios['linkImagen'];
            $linkAnuncio2 = $assocAnuncios['linkAnuncio'];
            $sqlAnuncios = "SELECT * FROM anuncios WHERE area = 'general' AND idAnuncio = '3'";
            $sqlExecuteAnuncios = mysqli_query($conectar, $sqlAnuncios);
            $assocAnuncios = mysqli_fetch_assoc($sqlExecuteAnuncios);
            $anuncio3 = $assocAnuncios['linkImagen'];
            $linkAnuncio3 = $assocAnuncios['linkAnuncio'];
            ?>
            <div> <a class="roomA" href="<?php echo $linkAnuncio2; ?>"><img src="<?php echo $anuncio2; ?>" width="250px" height="200px"></a></div>
            <div> <a class="roomA" href="<?php echo $linkAnuncio3; ?>"><img src="<?php echo $anuncio3; ?>" width="250px" height="200px"></a></div>
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
</body>

</html>