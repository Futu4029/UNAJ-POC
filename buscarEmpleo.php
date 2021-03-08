<?php
include 'sistema/conexion.php';
// Creamos la conexion
$obj = new Conexion();
$conexion =  $obj->abrirConexion();

// Creamos la consulta
$consulta = "SELECT * FROM oferta_laboral";
$ofertas = $conexion->query($consulta);

?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bolsa de trabajo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="main.css">


    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />

    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="image/bolsaDeTrabajo.png" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="icons/menu.svg" alt="menu" class="navbar-toggler-icon">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" id="nicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularioAlumno.php" id="alumnos">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularioEmpresa.php" id="empresas">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularioOferta.php" id="ofertas_laborales">Ofertas Laborales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" id="login">Log In</a>
                    </li>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                    Busqueda
                </button>
                <ul class="dropdown-menu text-lg-auto">
                    <li><a class="dropdown-item" href="buscarAlumnos.php">Buscar alumnos</a></li>
                    <li><a class="dropdown-item" href="buscarEmpleo.php">Buscar empleo</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height:50px"></div>

    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tabla" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead class="thread-dark">
                            <tr>
                                <th>Empresa</th>
                                <th>Cuit</th>
                                <th>Descripción de empleo</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de finalización</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($oferta = $ofertas->fetch()) {
                                echo '<tr style="background-color:#FFF;">
                                <td>' . $oferta['empresa'] . '</td>
                                <td>' . $oferta['cuit_empresa'] . '</td>
                                <td>' . $oferta['descripcion_puesto'] . '</td>
                                <td>' . $oferta['fecha_inicio'] . '</td>
                                <td>' . $oferta['fecha_fin'] . '</td>
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
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>

    <!-- JS personalizado -->
    <script type="text/javascript" src="main.js"></script>

</body>

</html>