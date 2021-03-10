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
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo_documento = $_POST["tipo-documento"];
$nro_documento = $_POST["nro-documento"];
$fecha_nac = $_POST["fecha-nac"];
$email = $_POST["email"];
$carrera = $_POST["carrera"];
$año = $_POST["año"];
$experiencia = $_POST["experiencia"];

// Creamos la conexion
$obj = new Conexion();
$conexion =  $obj->abrirConexion();


// Verificar que el registro no sea repetido
$consulta = "SELECT * FROM alumno WHERE tipo_documento = '$tipo_documento' AND nro_documento = '$nro_documento'";
$buscarRepetido = $conexion->query($consulta);
$verificar_usuario = $buscarRepetido->rowCount();
$titulo = "No se pudo realizar la carga. El usuario ya esta registrado";
if ($verificar_usuario > 0) {
    echo "<span class=\"titulo-error\">" . $titulo . "</span>";
    exit;
}

// Consulta para insertar datos
$insertar = "INSERT INTO alumno(nombre, apellido, tipo_documento, nro_documento, fecha_nac, mail, carrera, anio, experiencia) 
             VALUES ('$nombre', '$apellido', '$tipo_documento', '$nro_documento', '$fecha_nac', '$email', '$carrera', '$año', '$experiencia')";

// Se agregan los datos a la DB

$resultado = $conexion->prepare($insertar);
$resultado->execute();
$titulo1 = 'Error al registrar los datos.';
$titulo2 = 'Usuario registrado exitosamente.';
if (!$resultado) {
    echo "<span class=\"titulo-error\">" . $titulo1 . "</span>";
} else {
    echo "<span class=\"titulo-exito\">" . $titulo2 . "</span>";
}
// cerrar conexion
$conexion = $obj->cerrarConexion();
?>