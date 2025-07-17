<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Abraham Galindo">
  <meta name="copyright" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es">
  <meta name="description" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es Sistema de Debates Online abierto para todo el publico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>BackOffice DebateOnline.es</title>
  <link rel="icon" type="image/png" href="./assets/img/ico/favicon.png">
  <link rel="shortcut icon" href="./assets/img/ico/favicon.png">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Iniciar Sesión</h2>

        <form class="card-body cardbody-color p-lg-5" action="./assets/php/validarSesion.php" method="POST">

          <div class="text-center card-body cardbody-color p-lg-5">
            <img src="./assets/img/logo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" id="Correo" name="Correo" aria-describedby="emailHelp" placeholder="Correo" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="Contrasenia" name="Contrasenia" placeholder="Contraseña">
          </div>
          <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Iniciar Sesión</button></div>
      </div>
      </form>
    </div>

  </div>
  </div>
  </div>
</body>

</html>