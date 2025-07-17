<?php

// Conexión a la base de datos
include ("./assets/php/conexion.php");
$conn = conectar();

// Obtener los mensajes de la base de datos
$query = "SELECT mensajes3.*, usuarios.username FROM mensajes3 JOIN usuarios ON mensajes3.user_id = usuarios.id ORDER BY mensajes3.id ASC";
$result = mysqli_query($conn, $query);

// Mostrar los mensajes
while ($row = mysqli_fetch_assoc($result)) {
    $messageId = $row['id'];
    $username = $row['username'];
    $message = $row['message'];

    echo '<div>';
    echo '<strong>' . $username . '</strong>: ' . $message;
    echo ' <button class="reply-btn" data-message-id="' . $messageId . '" data-username="' . $username . '"></button>';
    echo '</div>';
}
