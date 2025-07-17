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
include "./assets/php/conexion.php";
$conectar = conectar();

date_default_timezone_set('Europe/Madrid');
$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$username = $_SESSION['id'];
$accion = "Ingreso a sala 3 maximizada"; 

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
$execute = mysqli_query($conectar,$insert);
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
            width: 800px;
            height: 450px;
            border: 1px solid white;
            overflow-y: scroll;
            margin-left: 300px;
            font-size: 20px
        }
        #chatbox::-webkit-scrollbar {
            width: 10px; /* Ancho de la barra de desplazamiento */
        }

        #chatbox::-webkit-scrollbar-thumb {
            background-color: #3c8dbc; /* Color del pulgar de la barra de desplazamiento */
        }

        #chatbox::-webkit-scrollbar-track {
            background-color: #ccc; 
        }


        .arrow-button {
            position: relative;
            display: inline-block;
            padding: 10px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 50px;
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
            border: none;
            border-bottom: 2px solid #ccc;
            margin-left: -170px;
            transition: border-color 0.3s ease;
            font-size: 22px;
            text-align: justify;
            padding-bottom: 4px;
            width: 700px;
            height: 35px;
            margin-top: 10px;
            margin-right: 16px;
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
            grid-template-rows: 250px;
            text-align: justify;
        }

        .adsTwo {
            display: grid;
            justify-content: center;
            grid-template-columns: 250px 250px;
            grid-template-rows: 250px;
            text-align: center;
            margin-top: -20px;
            margin-left: 250px;
            grid-gap: 80px;
        }

        .adsThree {
            display: grid;
            justify-content: center;
            grid-template-columns: 500px;
            grid-template-rows: 250px;
            text-align: center;
            margin-top: -20px;
            margin-left: 160px;
            grid-gap: 80px;
        }

        .data {
            display: flex;
            flex-direction: row;
            flex-flow: row wrap;
        }

        .room {
            background-color: #F2F8F8;
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
            font-size: 30px;
        }

        content p {
            text-align: center;
            margin-top: 10px;
            font-size: 32px;
            font-weight: 800;
            color: #3c8dbc;
        }

        form {
            margin-left: 500px;
            margin-top: 20px;
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

        .test {
            display: grid;
            justify-content: center;
            grid-template-columns: 800px;
            grid-template-rows: 100px;
            text-align: center;
            margin-top: 50px;
            margin-left: 423px;
        }

        .iconsTest {
            display: grid;
            justify-content: center;
            grid-template-columns: 25px 25px;
            grid-template-rows: 50px;
            grid-column-gap: 35px;
            margin-left: 30px;
            cursor: pointer;
        }

        .iconsTestButton {
            border: none;
            cursor: pointer;
        }

        .testInfo {
            display: flex;
            flex-direction: row;
            flex-flow: row wrap;
        }

        .titleTestIzq {
            font-size: 18px;
            color: rgba(0, 0, 0, 0.8);
            text-align: left;
            margin-top: 5px;
            margin-left: 10px;
            font-weight: bolder;
        }

        .descriptionTestIzq {
            font-size: 14px;
            color: rgba(0, 0, 0, 0.5);
            text-align: left;
            margin-top: 30px;
            margin-left: -195px;
            font-weight: 500;
        }

        .roomA {
            text-decoration: none;
        }

        .roomA {
            text-decoration: none;
        }

        .browser-button {
            text-decoration: none;
            border: none;
            cursor: pointer;
            width: 30px;
            height: 30px;
            font-size: 25px;
            color: #3c8dbc;
            margin-left: 25px;
        }
        .subtitleRoom {
            color: #3c8dbc;
            margin-top: 0px;
            margin-left: 408px!important;
            font-size: 18px!important;
            margin-right: 418px!important;
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
    <script>
        $(document).ready(function() {
            // Cargar los mensajes iniciales
            loadMessages();

            // Enviar mensaje
            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                var message = $('#message').val();
                if (message !== '') {
                    sendMessage(message);
                    $('#message').val('');
                }
            });

            // Responder a un mensaje
            $(document).on('click', '.reply-btn', function() {
                var messageId = $(this).data('message-id');
                var username = $(this).data('username');
                var replyMessage = prompt('Responder a ' + username + ':');
                if (replyMessage !== null) {
                    replyToMessage(messageId, replyMessage);
                }
            });

            // Cargar mensajes en intervalos regulares
            setInterval(loadMessages, 2000);
        });

        // Cargar mensajes
        function loadMessages() {
            $.ajax({
                url: 'load_messages3.php',
                type: 'GET',
                success: function(data) {
                    $('#chatbox').html(data);
                }
            });
        }

        // Enviar mensaje
        function sendMessage(message) {
            $.ajax({
                url: 'send_message3.php',
                type: 'POST',
                data: {
                    message: message
                },
                success: function() {
                    loadMessages();
                }
            });
        }

        // Responder a un mensaje
        function replyToMessage(messageId, replyMessage) {
            $.ajax({
                url: 'reply_message3.php',
                type: 'POST',
                data: {
                    message_id: messageId,
                    reply_message: replyMessage
                },
                success: function() {
                    loadMessages();
                }
            });
        }
    </script>
</head>

<body>
    <header>
        <img src="./assets/img/logos/logo2.jpg" alt="Logo de la empresa">
        <div class="botones">
            <a class="roomA" href="profileEdit.php">
                <div class="perfil-button"></div>
            </a>
            <a class="roomA" href="./assets/php/cerrarSesion.php">
                <div class="boton-cuadrado"><i class="fa fa-home"></i></div>
            </a>
        </div>
    </header>


            <?php
            $conectar = conectar();
            $sqlSentence = "SELECT * FROM salas WHERE estado = 'Vigente'";
            $sqlExecute = mysqli_query($conectar, $sqlSentence);
            while ($sqlAssoc = mysqli_fetch_assoc($sqlExecute)) {
                $numeroSala = $sqlAssoc['numero'];
                $temaSala = $sqlAssoc['tema'];
                $numSala = 3;
            ?>
            <?php } ?>


    <content>
        <?php
        $num = 3;
        $sqlSentence = "SELECT * FROM salas WHERE estado = 'Vigente' AND numero= '$num'";
        $sqlExecute = mysqli_query($conectar, $sqlSentence);
        $dataAssoc = mysqli_fetch_assoc($sqlExecute);
        $tema = $dataAssoc['tema'];
        $usuario = $_SESSION['id'];
        $sqlEstatus = "SELECT * FROM estadousuarios WHERE id_usuario = $usuario";
        $executeEstatus = mysqli_query($conectar, $sqlEstatus);
        $estatusAssoc = mysqli_fetch_assoc($executeEstatus);
        $estatus = $estatusAssoc['state'];
        if ($estatus == "Bloqueado") {
        ?>
            <p>Sala <?php echo $num;
                    $it = $num; ?>: <?php echo $tema; ?></p>
            <p>Usted no puede participar en los debates debido a incumplir nuestras politícas de privacidad.</p>

        <?php } else { 
            $maximizaRoom = "chat".$num.".php";
            ?>

            <p>Sala <?php echo $num;
                    $it = $num; ?> <?php echo $tema; ?><a class="roomA" href="<?php echo $maximizaRoom; ?>"><button class="browser-button"><i class="fa fa-window-maximize"></i></button></a></p>

            <div id="chatbox"></div>
            <form id="chat-form" action="">
                <input type="text" id="message" placeholder="Escribe tu mensaje" class="selectI">
                <button class="arrow-button">
                    <span class="arrow"></span>
                </button>
            </form>
        <?php } ?>
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
        function rateGood() {
            window.location.href = "./assets/php/valueTest.php?v=1&it=<?php echo $it; ?>&us=<?php echo $usuario; ?>";
            header('Location:./assets/php/valueTest.php?v=1&it=<?php echo $it; ?>&us=<?php echo $usuario; ?>');
        }

        function rateBad() {
            window.location.href = "./assets/php/valueTest.php?v=2&it=<?php echo $it; ?>&us=<?php echo $usuario; ?>";
            header('Location:./assets/php/valueTest.php?v=2&it=<?php echo $it; ?>&us=<?php echo $usuario; ?>');
        }
    </script>
</body>

</html>