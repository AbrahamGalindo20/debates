<?php
include "./conexion.php";
$conectar = conectar();
$idAnuncio = $_GET['idA'];
$idUser = $_GET['idU'];
$sqlNoticia = "SELECT * FROM anuncios WHERE id = '$idAnuncio'";
$queryNoticia =  mysqli_query($conectar, $sqlNoticia);
$noticiaAssoc = mysqli_fetch_assoc($queryNoticia);
$linkNoticia = $noticiaAssoc['linkAnuncio'];

$insert = "INSERT INTO estadisticasanuncios (id_anuncio,id_user) 
VALUES ('$idAnuncio','$idUser');";
$execute = mysqli_query($conectar, $insert);
header('Location:'.$linkNoticia);

?>