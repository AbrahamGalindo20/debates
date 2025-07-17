<?php
include './../../assets/php/conexion.php';

$conexion = conectar();
$subtitulo = $_POST['subtitulo'];  
$noSala = $_POST['sala'];  
$tema = $_POST['tema'];  
$categoria = $_POST['categoria'];
$directorio = "./../../../assets/img/rooms/";
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}
$sala = $directorio.basename($_FILES["imagen"]["name"]);
move_uploaded_file($_FILES["imagen"]["tmp_name"], $sala);
if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $sala)) {
 //   echo "Foto1 exito";
} else {
   // echo "Foto1 error";
}
$nameSala = "./assets/img/rooms/".$sala;

$texto = "salas.php";
$alertaCorrecto = "<script type='text/javascript'>
alert('Sala Agregada Correctamente');
window.location.href='./../sesion/$texto';
</script>";

//Send conversation to Old Message
$selectIdRoom = "SELECT * FROM salas WHERE numero = '$noSala' AND estado = 'Vigente'";
$ejecutarIdRoom = mysqli_query($conexion,$selectIdRoom);
$assocIdRoom = mysqli_fetch_assoc($ejecutarIdRoom);
$idRoom = $assocIdRoom['id'];
$salaMensajes = "mensajes".$noSala;
$selectMessage = "SELECT * FROM $salaMensajes";
$ejecutarMessage = mysqli_query($conexion,$selectMessage);
while($data = mysqli_fetch_assoc($ejecutarMessage)){
    $user_id = $data['user_id'];
    $message = $data['message'];
    $id_mensajes = $data['id'];
    $insertDataOld = "INSERT INTO debatesantiguos(id_debate, id_mensajes, user_id, message) VALUES ('$idRoom','$id_mensajes','$user_id','$message');";
    $ejecutar = mysqli_query($conexion,$insertDataOld);

}
//Update state Room old
$updateDatos = "UPDATE salas SET estado = 'Finalizado' WHERE numero = '$noSala' AND estado = 'Vigente' AND id = '$idRoom'";
$ejecutarUpdate = mysqli_query($conexion,$updateDatos);
//Delete message Room old
$deleteDatos = "DELETE FROM $salaMensajes";
$ejecutarDelete = mysqli_query($conexion,$deleteDatos);
//Insert data in Room
$insertarDatos = "INSERT INTO salas (numero,tema,subtitulo,imagen,estado,categoria) 
VALUES('$noSala','$tema','$subtitulo','$nameSala','Vigente','$categoria')";
$ejecutarSolicitud = mysqli_query($conexion,$insertarDatos); 
//Alertas
echo $alertaCorrecto;
//mysqli_free_result($filasUsuarios); 
mysqli_close($conexion);
?>