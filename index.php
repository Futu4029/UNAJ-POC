<html lang = "es">
    <head>
        <title>Bolsa de trabajo</title>
        <meta chartset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fonts">
    </head>
    <body>
        <header>
        <div class="alert alert-info">
        <h2 class="text-center">Bienvenidos a la bolsa de trabajo.</h2>
        </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            </div>
            </nav>
        <p>Aquí encontrarás todas las ofertas laborales. Si quieres postularte en busca de trabajo haz click <a href="alumnoFormulario.php">aquí</a>.<br>
        Si tienes tu empresa o emprendimiento y quieres postular una oferta laboral, haz click <a href="empresaFormulario.php">aquí</a> 
        </p>
    </body>
</html>


<?php
    //Es una query para devolver los nombres y apellidos de la base de datos
    include('sistema/conexion.php');
    $obj = new Conexion();
    $conexion = $obj->abrirConexion();

    $consulta = "SELECT * from alumno";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $datos = $resultado->fetchAll();

    //var_dump($datos);
    foreach($datos as $dato){
        echo $dato['nombre']. "<br>";
    }
?>