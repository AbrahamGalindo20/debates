<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$area = $_POST['area'];  
$idAnuncio = $_POST['idAnuncio'];  
$linkAnuncio = $_POST['linkAnuncio'];  
$directorio = "./../../../assets/img/";
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}
$sala = $directorio.basename($_FILES["linkImagen"]["name"]);
$sala2 = basename($_FILES["linkImagen"]["name"]);
move_uploaded_file($_FILES["linkImagen"]["tmp_name"], $sala);
if (move_uploaded_file($_FILES["linkImagen"]["tmp_name"], $sala)) {
    echo "Foto1 exito";
} else {
    echo "Foto1 error";
}
$nameImagen = "./assets/img/".$sala2;
$texto = "anuncios.php";
$alertaCorrecto = "<script type='text/javascript'>
alert('Anuncio Agregado Correctamente');
window.location.href='./../sesion/$texto';
</script>";

$insertarDatos = "INSERT INTO anuncios (area,idAnuncio,linkImagen,linkAnuncio) 
VALUES('$area','$idAnuncio','$nameImagen','$linkAnuncio')";
$ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>