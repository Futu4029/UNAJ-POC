<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bolsa de trabajo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="resources/sweetalert2/sweetalert2.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/bolsaDeTrabajo.png" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="icons/menu.svg"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" id="inicio">Inicio</a>
                    </li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrate
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="src/forms/formularioAlumno.php">Alumnos</a></li>
                            <li><a class="dropdown-item" href="src/forms/formularioEmpresa.php">Empresa</a></li>
                            <li><a class="dropdown-item" href="src/forms/formularioOferta.php">Ofertas laborales</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Busqueda
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="src/search/buscarAlumnos.php">Buscar alumnos</a></li>
                                <li><a class="dropdown-item" href="src/search/buscarEmpleo.php">Buscar empleo</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a class="btn btn-danger" href="src/login/login.php" role="button">Log In</a>
            </div>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="content-center">
                <h1>¡Tu website para la elección de tu primer trabajo!</h1>
                <p>Aquí encontrarás todas las ofertas laborales. <br> Si sos estudiante y quieres postularte a tu primer trabajo, esta es tu oportunidad.<br>
                    Si tienes tu empresa o emprendimiento y estas buscando jovenes emprendedores, este es el sitio.
                </p>
            </div>
        </div>

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="resources/jquery/jquery-3.3.1.min.js"></script>
        <script src="resources/popper/popper.min.js"></script>
        <script src="resources/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>