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
  <section id="formulario">
    <h1 id="formulario_h1">Ofertas Laborales</h1>
    <p>
      Aqui las empresas presentan sus ofertas laborales.
      Antes de presentar su oferta por favor registre su empresa.
    </p>
  </section>
  <div class="container my-3">
    <form action="../register/registrarOferta.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Nombre de empresa</span>
        <input type="text" class="form-control" name="nombre_empresa" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">CUIT</span>
        <input type="number" class="form-control" name="cuit" required>
      </div>
      <div class="input-group mb-4">
        <span class="input-group-text">Descripcion del puesto</span>
        <textarea class="form-control" name="descr" required></textarea>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Fecha de Inicio</span>
        <input type="date" class="form-control" name="fecha_inicio" id="basic-url">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Fecha de finalización</span>
        <input type="date" class="form-control" name="fecha_fin">
      </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../../resources/jquery/jquery-3.3.1.min.js"></script>
  <script src="../../resources/popper/popper.min.js"></script>
  <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>