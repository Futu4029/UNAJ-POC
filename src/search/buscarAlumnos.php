<?php
include '../../config/conexion.php';
// Creamos la conexion
$obj = new Conexion();
$conexion =  $obj->abrirConexion();

// Creamos la consulta
$consulta = "SELECT * FROM alumno";
$alumnos = $conexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bolsa de trabajo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../../css/main.css">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../../resources/datatables/datatables.min.css" />

    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="../../resources/datatables/css/dataTables.bootstrap4.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php"><img src="../../img/bolsaDeTrabajo.png" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="../../icons/menu.svg"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php" id="inicio">Inicio</a>
                    </li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrate
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="../forms/formularioAlumno.php">Alumnos</a></li>
                            <li><a class="dropdown-item" href="../forms/formularioEmpresa.php">Empresa</a></li>
                            <li><a class="dropdown-item" href="../forms/formularioOferta.php">Ofertas laborales</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Busqueda
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="../search/buscarAlumnos.php">Buscar alumnos</a></li>
                                <li><a class="dropdown-item" href="../search/buscarEmpleo.php">Buscar empleo</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a class="btn btn-danger" href="../login/login.php" role="button">Log In</a>
            </div>
        </div>
    </nav>
    <div style="height:50px"></div>
    <!-- Tabla con DataTables-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tabla" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead class="thread-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Tipo de documento</th>
                                <th>Número de documento</th>
                                <th>Mail</th>
                                <th>Carrera</th>
                                <th>Año</th>
                                <th>Experiencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($alumno = $alumnos->fetch()) {
                                echo '<tr style="background-color:#FFF;">
                                <td>' . $alumno['nombre'] . '</td>
                                <td>' . $alumno['apellido'] . '</td>
                                <td>' . $alumno['tipo_documento'] . '</td>
                                <td>' . $alumno['nro_documento'] . '</td>
                                <td>' . $alumno['mail'] . '</td>
                                <td>' . $alumno['carrera'] . '</td>
                                <td>' . $alumno['anio'] . '</td>
                                <td>' . $alumno['experiencia'] . '</td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../resources/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../resources/popper/popper.min.js"></script>
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../../resources/datatables/datatables.min.js"></script>

    <!-- JS personalizado -->
    <script type="text/javascript" src="../../js/main.js"></script>

</body>

</html>