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
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="image/teclean2.png" class="img-fluid" id="login_img" alt="login">
                </div>
                <div class="col-lg-7 px-5 pt-3">
                    <h2 class="font-weight-bold py-2">Logueate</h2>
                    <h4>Entra a tu cuenta</h4>
                    <form action="">
                        <div class="form-row">
                            <div class="col-7">
                                <input type="email" placeholder="Email-Address" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-7">
                                <input type="password" placeholder="********" class="form-controlmy my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-7">
                                <button type="button" class="btn1 mt-1 mb-3"><a href="validarDatos.php">Login</a> </button>
                            </div>
                        </div>
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--<div class ="container" id='login'>
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h2>LOGIN</h2>
            </div>
            <div class="panel-body">
                <h4>Usuario: </h4>
                <input type= "text" class="form-control" name="usuario" placeholder="usuario"><br>
                <h4>Contraseña: </h4>
                <input type= "text" class="form-control" name="password" placeholder="contraseña"><br>
            </div> 
            <div class="panel-footer">
                <button class="btn btn-primary">Ingresar</button>
                <button class="btn btn-warning">Registrar</button>
            </div>
        </div>
    </div>-->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>