<?php
include "./conexion.php";
$conectar = conectar();
$idAnuncio = $_GET['idA'];
$idUser = $_GET['idU'];
$sqlNoticia = "SELECT * FROM noticiasgenerales WHERE id = '$idAnuncio'";
$queryNoticia =  mysqli_query($conectar, $sqlNoticia);
$noticiaAssoc = mysqli_fetch_assoc($queryNoticia);
$linkNoticia = $noticiaAssoc['linkNoticia'];

$insert = "INSERT INTO estadisticasnoticias (id_anuncio,id_user) 
VALUES ('$idAnuncio','$idUser');";
$execute = mysqli_query($conectar, $insert);
header('Location:'.$linkNoticia);

?>