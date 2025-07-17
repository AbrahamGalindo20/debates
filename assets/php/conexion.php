<?php
    function conectar(){    
// Conexión a la base de datos
        //$host = "162.241.62.85"; 
        //$user = "cecytco2_consultoria_dev";       
        //$password = "Ul.2020630.Ag.Dev";       
        //$dataBase = "cecytco2_debates";
        $host = "127.0.0.1"; 
        $user = "root";       
        $password = "Ul.2020630";       
        $dataBase = "debates";
        $conexion = mysqli_connect($host,$user,$password,$dataBase);
        if(!$conexion){ 
            echo "No existe la base de datos o el servidor esta apagado";
        }
        return $conexion; 
    }
?>