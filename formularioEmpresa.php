<html lang="en">

<head>
  <!-- Meta tags -->
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
  <section id="formulario">
    <h1 id="formulario_h1">Empresas</h1>
    <p>
      Aqui las empresas presentan sus datos.
    </p>
  </section>
  <div class="container my-3">
    <form action="registrarEmpresa.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Nombre de empresa</span>
        <input type="text" class="form-control" name="nombre_empresa" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">CUIT</span>
        <input type="number" class="form-control" name="cuit" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Provincia</span>
        <input type="text" class="form-control" name="provincia">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Localidad</span>
        <input type="text" class="form-control" name="localidad" id="basic-url">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Direccion</span>
        <input type="text" class="form-control" name="direccion">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Teléfono</span>
        <input type="tel" class="form-control" name="telefono">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">E-Mail</span>
        <input type="email" class="form-control" name="mail" placeholder="@">
      </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>