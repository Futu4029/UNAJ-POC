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

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="image/bolsaDeTrabajo.png" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="icons/menu.svg" alt="menu" class="navbar-toggler-icon">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-lg-auto">
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
        </div>
    </nav>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include 'sistema/conexion.php';

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
if ($verificar_usuario > 0) {
    echo 'No se pudo realizar la carga. El usuario ya esta registrado';
    exit;
}

// Consulta para insertar datos
$insertar = "INSERT INTO alumno(nombre, apellido, tipo_documento, nro_documento, fecha_nac, mail, carrera, anio, experiencia) 
             VALUES ('$nombre', '$apellido', '$tipo_documento', '$nro_documento', '$fecha_nac', '$email', '$carrera', '$año', '$experiencia')";

// Se agregan los datos a la DB

$resultado = $conexion->prepare($insertar);
$resultado->execute();
if (!$resultado) {
    echo 'Error al registrar los datos.';
} else {
    echo 'Usuario registrado exitosamente.';
}
// cerrar conexion
$conexion = $obj->cerrarConexion();
?>