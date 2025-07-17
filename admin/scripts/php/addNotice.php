<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$noSala = $_POST['sala'];  
$linkNoticia = $_POST['linkNoticia'];  
$tema = $_POST['tema'];  
$fecha =  $_POST['fecha'];
$directorio = "./../../../assets/img/rooms/";
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}
$sala = $directorio.basename($_FILES["linkImagen"]["name"]);
move_uploaded_file($_FILES["linkImagen"]["tmp_name"], $sala);
if (move_uploaded_file($_FILES["linkImagen"]["tmp_name"], $sala)) {
    echo "Foto1 exito";
} else {
    echo "Foto1 error";
}
$nameSala = "./assets/img/rooms/".$sala;
$texto = "noticias.php";
$alertaCorrecto = "<script type='text/javascript'>
alert('Noticia Agregada Correctamente');
window.location.href='./../sesion/$texto';
</script>";

$insertarDatos = "INSERT INTO noticiasgenerales (idRoom,tema,linkImagen,fecha,linkNoticia) 
VALUES('$noSala','$tema','$nameSala','$fecha','$linkNoticia')";
$ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>
?>