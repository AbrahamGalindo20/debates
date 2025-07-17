<?php

// Conexión a la base de datos
include ("./assets/php/conexion.php");
$conn = conectar();

// Obtener el ID del mensaje y el mensaje de respuesta
$messageId = $_POST['message_id'];
$replyMessage = $_POST['reply_message'];

// Insertar la respuesta en la base de datos
$query = "UPDATE mensajes1 SET message = '$replyMessage' WHERE id = '$messageId'";
mysqli_query($conn, $query);
