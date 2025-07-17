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
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sala de Debates en Tiempo Real</title>
    <style>
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
            border: none;
            border-bottom: 2px solid #ccc;
            margin-left: -50px;
            transition: border-color 0.3s ease;
            font-size: 15px;
            text-align: justify;
            padding-bottom: 4px;
            width: 350px;
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
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #f2f2f2;
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
      background-color: #f8f8f8;
      padding: 20px;
      height: 500px;
      
    }
    .nav2 {
      float: right;
      width: 20%;
      background-color: #f8f8f8;
      padding: 20px;
      height: 500px;
      
    }
    .nav3 {
      float: bottom;
      width: 1300px;
      background-color: #f8f8f8;
      padding: 20px;
      height: 20%;
      
    }
    
    nav ul {
      list-style-type: none;
      padding: 2;
      margin-left: 0px;
    }

    nav ul li a{
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

    content h1{
        margin-left: 340px;
        font-size: 25px;
    }

    content p{
        text-align: center;
        margin-top: 10px;
        font-size: 25px;
        font-weight: 800;
        color: #3c8dbc;
    }
    form{
        margin-left: 500px;
        margin-top: 20px;
    }
    footer {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
    }
    
    .back-link {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      font-size: 20px;
      padding: 10px;
      background-color: #f8f8f8;
      border-radius: 5px;
      text-decoration: none;
      color: #333;
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
                url: 'load_messages.php',
                type: 'POST',
                success: function(data) {
                    $('#chatbox').html(data);
                }
            });
        }

        // Enviar mensaje
        function sendMessage(message) {
            $.ajax({
                url: 'send_message.php',
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
                url: 'reply_message.php',
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
    <img src="./assets/img/logos/logo.jpg" alt="Logo de la empresa">
  </header>

  <nav>
    <ul>
 Anuncios
    </ul>
  </nav>
  <nav class="nav2">
    <ul>
 Anuncios
    </ul>
  </nav>
  <nav class="nav3">
    <ul>
 Anuncios
    </ul>
  </nav>
  <content>
    <p>Sala 1 "Elecciones"</p>
    <div id="chatbox"></div>
    <form id="chat-form" action="">
        <input type="text" id="message" placeholder="Escribe tu mensaje" class="selectI">
        <button class="arrow-button">
            <span class="arrow"></span>
        </button>
        </button>

    </form>
    </content>

</body>

</html>