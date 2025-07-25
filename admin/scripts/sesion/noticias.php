<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion == '') {
    $alerta = "<script type='text/javascript'>
		alert('Acceso incorrecto');
		</script>";
    echo $alerta;
    header('Location:./../../../index.php');
    die();
}
include './../../assets/php/conexion.php';
$conexion = conectar();
?>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Abraham Galindo">
    <meta name="copyright" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es">
    <meta name="description" content="© 2023 Abraham Galindo ag.edureality.com.mx DebateOnline.es Sistema de Debates Online abierto para todo el publico">
    <title>BackOffice DebateOnline.es</title>
    <link rel="icon" type="image/png" href="./../../assets/img/ico/favicon.png">
    <link rel="shortcut icon" href="./../../assets/img/ico/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });

        function ventanaNueva(documento) {
            window.open(documento, 'nuevaVentana', 'width=100', 'height=300');
        }
    </script>
</head>
<div class="area">


    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Gestión <b>Noticias</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addRoom" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Noticia</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Número de Sala</th>
                            <th>Tema</th>
                            <th>Imagen Noticia</th>
                            <th>Link Noticia</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $datosAdmin = "SELECT * FROM noticiasgenerales  WHERE estado <> 'Archivado'";
                        $consultaAdmin = mysqli_query($conexion, $datosAdmin);

                        while ($row = mysqli_fetch_assoc($consultaAdmin)) {
                        ?>
                            <tr>
                                <td><?php echo $row['idRoom']; ?></td>
                                <td><?php echo $row['tema']; ?></td>
                                <?php
                                $ruta = "../../../" . $row['linkImagen'];
                                ?>
                                <td><img src="<?php echo $ruta; ?>" width="100px" height="50px"></td>
                                <td><?php echo $row['linkNoticia']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>
                                    <a href="#editRoom<?php echo $row['id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#archiveRoom<?php echo $row['id']; ?>" class="archive" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Archive">&#xe149;</i></a>
                                    <a href="#deleteRoom<?php echo $row['id']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <!-- Edit Modal HTML -->
                            <div id="editRoom<?php echo $row['id']; ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="./../php/editNotice.php">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editar Noticia</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $row['id']; ?>">
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>No. Sala</label>
                                                    <select class="form-control" name="sala" class="sala">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="Todas">Todas</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tema</label>
                                                    <input type="text" name="tema" id="tema" class="form-control" required value="<?php echo $row['tema']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Link Noticia</label>
                                                    <input type="text" name="linkNoticia" id="linkNoticia" class="form-control" required value="<?php echo $row['linkNoticia']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fecha</label>
                                                    <input type="text" name="fecha" id="fecha" class="form-control" required value="<?php echo $row['fecha']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-success" value="Editar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal HTML -->
                            <div id="deleteRoom<?php echo $row['id']; ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="./../php/deleteNotice.php">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Eliminar Noticia</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <h4 class="modal-title">¿Deseas eliminar la  siguiente noticia con el Id?</h4>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>id</label>
                                                    <input type="text" name="id" id="id" class="form-control" required value="<?php echo $row['id']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-success" value="Eliminar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                             <!-- Archive Modal HTML -->
                             <div id="archiveRoom<?php echo $row['id']; ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="./../php/archiveNotice.php">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Archivar Noticia</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <h4 class="modal-title">¿Deseas archivar la Noticia con el siguiente id?</h4>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>id</label>
                                                    <input type="text" name="id" id="id" class="form-control" required value="<?php echo $row['id']; ?>">
                                                    <input type="hidden" name="state" id="state" class="form-control" required value="Archivado">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-success" value="Archivar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Noticias <b>Archivadas</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Número de Sala</th>
                            <th>Tema</th>
                            <th>Imagen Noticia</th>
                            <th>Link Noticia</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $datosAdmin = "SELECT * FROM noticiasgenerales WHERE estado = 'Archivado'";
                        $consultaAdmin = mysqli_query($conexion, $datosAdmin);

                        while ($row = mysqli_fetch_assoc($consultaAdmin)) {
                        ?>
                            <tr>
                                <td><?php echo $row['idRoom']; ?></td>
                                <td><?php echo $row['tema']; ?></td>
                                <?php
                                $ruta = "../../../" . $row['linkImagen'];
                                ?>
                                <td><img src="<?php echo $ruta; ?>" width="100px" height="50px"></td>
                                <td><?php echo $row['linkNoticia']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>
                                    <a href="#desarchiveRoom<?php echo $row['id']; ?>" class="archive" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Archive">&#xe169;</i></a>
                                </td>
                            </tr>
                             <!-- Archive Modal HTML -->
                             <div id="desarchiveRoom<?php echo $row['id']; ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="./../php/archiveNotice.php">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Desarchivar Noticia</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <h4 class="modal-title">¿Deseas desarchivar la Noticia con el siguiente id?</h4>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>id</label>
                                                    <input type="text" name="id" id="id" class="form-control" required value="<?php echo $row['id']; ?>">
                                                    <input type="hidden" name="state" id="state" class="form-control" required value="Finzalizado">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-success" value="Archivar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Add Modal HTML -->
    <div id="addRoom" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="./../php/addNotice.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Noticia</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <input type="text" name="tema" id="tema" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subtitulo">Link Noticia</label>
                            <input type="text" name="linkNoticia" id="linkNoticia" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="text" name="fecha" id="fecha" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" name="linkImagen" id="linkImagen" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="sala">No. Sala</label>
                            <select class="form-control" name="sala" class="sala">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="Todas">Todas</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-success" value="Agregar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="./login.php">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        <?php
                        $correo =  $_SESSION['usuario'];
                        $selectDatos = "SELECT * FROM admin WHERE email = '$correo'";
                        $resultadoDatos = mysqli_query($conexion, $selectDatos);
                        $row = mysqli_fetch_assoc($resultadoDatos);
                        ?>
                        <?php echo $row['username']; ?>
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./administradores.php">
                    <i class="fa fa-laptop"></i>
                    <span class="nav-text">
                        Administradores
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./usuarios.php">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">
                        Usuarios
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="./bloqueoUsuarios.php">
                    <i class="fa fa-ban"></i>
                    <span class="nav-text">
                        Bloquear Usuarios
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./estadisticas.php">
                    <i class="fa fa-signal"></i>
                    <span class="nav-text">
                        Estadisticas IP
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./salas.php">
                    <i class="fa fa-search-plus"></i>
                    <span class="nav-text">
                        Administrar Salas
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./encuestas.php">
                    <i class="fa fa-file-text"></i>
                    <span class="nav-text">
                        Administrar Encuestas
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./anuncios.php">
                    <i class="fa fa-bell"></i>
                    <span class="nav-text">
                        Administrar Anuncios
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="./noticias.php">
                    <i class="fa fa-bullhorn"></i>
                    <span class="nav-text">
                        Administrar Noticias
                    </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="../../assets/php/cerrarSesion.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Cerrar Sesión
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    </body>

</html>