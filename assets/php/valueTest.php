<?php
include 'conexion.php';
$conexion = conectar();
$value = $_GET['v'];
$test = $_GET['it'];
$user = $_GET['us'];
$alertaTest = "<script type='text/javascript'>
    window.location.href='./../../test.php?it=$test';
    </script>";

$consult = "SELECT * FROM encuestasestadisticas WHERE id_user = '$user' AND id_test = '$test'";
$execute = mysqli_query($conexion, $consult);
$assoc = mysqli_fetch_assoc($execute);
$estado = $assoc['id_user'];
if ($estado == '' || $estado == ' ' || $estado == NULL) {
    $testInsert = "INSERT INTO encuestasestadisticas(id_test,respuesta,id_user) VALUES('$test','$value','$user')";
    $executeInsert = mysqli_query($conexion, $testInsert);
    echo $alertaTest;
    header('Location:./../../test.php?it=' . $test);
} else {
    echo $alertaTest;
    header('Location:./../../test.php?it=' . $test);
}

mysqli_close($conexion);
