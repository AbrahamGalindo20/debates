<?php
session_start();
$id = $_SESSION['id'];
// Conexión a la base de datos
include ("./assets/php/conexion.php");
$conn = conectar();

// Obtener el mensaje enviado y el ID del usuario
$message = $_POST['message'];
$userId = $id; // ID del usuario actual, aquí se debe implementar la lógica para obtener el ID del usuario

// Insertar el mensaje en la base de datos
$query = "INSERT INTO mensajes2 (user_id, message) VALUES ('$userId', '$message')";
mysqli_query($conn, $query);
