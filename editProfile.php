<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['id'];
if ($varsesion == null || $varsesion == '') {
    $alerta = "<script type='text/javascript'>
		alert('Acceso incorrecto');
		</script>";
    echo $alerta;
    header('Location:./index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Abraham Galindo">
    <meta name="copyright" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es">
    <meta name="description" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es Sistema de Debates Online abierto para todo el publico">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DebateOnline.es</title>

    <link rel="icon" type="image/png" href="./assets/img/ico/favicon.png">
    <link rel="shortcut icon" href="./assets/img/ico/favicon.png">
</head>
<style>
    .redes {
        display: grid;
        justify-content: center;
        grid-template-columns: 50px 50px 50px 50px 50px;
        grid-template-rows: 25px;
        text-align: center;
        margin-top: -15px;
        margin-right: 400px;
        margin-left: 50px;
        grid-column-gap: 5px;
    }

    footer {
        display: flex;
        padding: 5px 10px;
        background-color: #FFF;
        color: #fff;
        margin-top: 120px !important;
    }
</style>

<body>

    <div class="contenedor">
        <div class="slider2">
            <div class="slide slide2">
                <div class="slide-content">

                </div>
                <main class="divisorEdit">
                    <div>
                        <form action="./assets/php/editData.php" method="POST">
                            <h1>Editar Perfil</h1>
                            <?php
                            include('./assets/php/conexion.php');
                            $conexion = conectar();
                            $id = $_SESSION['id'];
                            $selectData = "SELECT * FROM usuarios WHERE id = '$id'";
                            $executeData = mysqli_query($conexion, $selectData);
                            while ($row = mysqli_fetch_assoc($executeData)) {
                            ?>
                                <div class="form-group">
                                    <label for="username">Nombre</label>
                                    <input type="text" id="username" name="username" class="form-input" placeholder="Tu nombre o nombre de usuario" value="<?php echo $row['username']; ?>" readonly>
                                    <input type="hidden" id="id" name="id" class="form-input" value="<?php echo $id; ?>"><i class="fa fa-lock" style="font-size:18px; color:rgba(0,0,0,0.6);"></i>
                                </div>
                                <div class="form-group">
                                    <label for="age">Edad</label>
                                    <select id="age" name="age">
                                        <option value="18-25">18-25</option>
                                        <option value="25-35">25-35</option>
                                        <option value="35-45">35-45</option>
                                        <option value="45-55">45-55</option>
                                        <option value="55-65">55-65</option>
                                        <option value="+65">+65</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-input" placeholder="direcciondeemail@gmail.com" value="<?php echo $row['email']; ?>"><i class="fa fa-pencil" style="font-size:18px; color:rgba(0,0,0,0.6);"></i>
                                </div>
                                <div class="form-group">
                                    <label for="genero">Sexo</label>
                                    <input type="genero" id="genero" name="genero" class="form-input" placeholder="genero" value="<?php echo $row['sexo']; ?>"><i class="fa fa-lock" style="font-size:18px; color:rgba(0,0,0,0.6);"></i>
                                </div>
                                <button type="submit" class="submit-button">Editar Datos</button>
                            <?php } ?>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <footer>
        <main class="redes">
            <div><a href="https://www.facebook.com/profile.php?id=61551598201084"><img src="./assets/img/redes/facebook.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.instagram.com/debate.online.es/"><img src="./assets/img/redes/instagram.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.tiktok.com/@debateonline.es"><img src="./assets/img/redes/tiktok.png" width="30px" height="30px"></a></div>
            <div><a href="https://www.youtube.com/channel/UCHydIgCwA0DBrpb-Mf9ZMBA"><img src="./assets/img/redes/youtube.png" width="40px" height="30px"></a></div>
            <div><a href="contacto@debateonline.es"><img src="./assets/img/redes/gmail.png" width="60px" height="30px"></a></div>
        </main>
        <ul>
            <li><a href="terms.php">Condiciones general</a></li>
            <li><a href="privacy.php">Política de privacidad</a></li>
            <li><a href="cookies.php">Uso de cookies</a></li>
            <li><a href="help.php">Ayuda</a></li>
            <li><a href="contact.php">Contacto</a></li>
        </ul>
    </footer>


    <script src="./main.js"></script>

</body>

</html>