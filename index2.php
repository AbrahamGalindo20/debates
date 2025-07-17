<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Acceso</title>
    <style>
        form {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Acceso</h1>
    <?php
        $nombre = $contrasena = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $contrasena = $_POST['contrasena'];

            if (empty($nombre) || empty($contrasena)) {
                echo "<p style='color: red;'>Por favor, rellene todos los campos.</p>";
            } else {
                // Procesar los datos o realizar las validaciones necesarias
                // ...
                echo "<p style='color: green;'>¡Acceso concedido!</p>";
            }
        }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <div>
            <input type="submit" value="Ingresar">
        </div>
    </form>
</body>
</html>
