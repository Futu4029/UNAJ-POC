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
    <section id="validador">
        <div class="container">
            <div class="content-center">
                <h1>VALIDACIÓN DE DATOS</h1>
                <button type="button" class="btn btn-success"><a href="validarAlumnos.php" id="linkVal">Validar Alumnos</a></button>
                <button type="button" class="btn btn-success"><a href="validarOfertas.php" id="linkVal">Validar Ofertas</a></button>
            </div>
        </div>

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>