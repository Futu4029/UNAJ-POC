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
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../resources/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../resources/popper/popper.min.js"></script>
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>
<?php
include '../../config/conexion.php';

// Almacenando los datos obtenidos de los formularios
$nombre_empresa = $_POST["nombre_empresa"];
$cuit = $_POST["cuit"];
$descr = $_POST["descr"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];


// Creamos la conexion
$obj = new Conexion();
$conexion =  $obj->abrirConexion();


// Verificar que el registro no sea repetido
$consulta = "SELECT * FROM oferta_laboral WHERE empresa = '$nombre_empresa' AND cuit_empresa = '$cuit' AND descripcion_puesto = '$descr'";
$buscarRepetido = $conexion->query($consulta);
$verificar_usuario = $buscarRepetido->rowCount();
$titulo = "No se pudo realizar la carga. La oferta ya esta registrada";
if ($verificar_usuario > 0) {
    echo "<span class=\"titulo-error\">" . $titulo . "</span>";
    exit;
}

// Verificar que la oferta pertenece a una empresa
$consulta = "SELECT * FROM empresa WHERE nombre_empresa = '$nombre_empresa' AND cuit = '$cuit'";
$buscarEmpresa = $conexion->query($consulta);
$verificar_usuario = $buscarEmpresa->rowCount();
$titulo = "No se pudo realizar la carga. Primero registre su empresa";
if (!$verificar_usuario > 0) {
    echo "<span class=\"titulo-error\">" . $titulo . "</span>";
    exit;
}

// Consulta para insertar datos
$insertar = "INSERT INTO oferta_laboral(empresa, cuit_empresa, descripcion_puesto, fecha_inicio, fecha_fin) 
             VALUES ('$nombre_empresa', '$cuit', '$descr', '$fecha_inicio', '$fecha_fin')";

// Se agregan los datos a la DB
$resultado = $conexion->prepare($insertar);
$resultado->execute();
$titulo1 = 'Error al registrar los datos.';
$titulo2 = 'Oferta registrada exitosamente.';
if (!$resultado) {
    echo "<span class=\"titulo-error\">" . $titulo1 . "</span>";
} else {
    echo "<span class=\"titulo-exito\">" . $titulo2 . "</span>";
}
// cerrar conexion
$conexion = $obj->cerrarConexion();
?>
