<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de empresa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <form action = "registrarAlumno.php" method ="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre</span>
        <input type="text" class="form-control" name="nombre" aria-label="Nombre" aria-describedby="basic-addon1">
      </div class="valid-feedback">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Apellido</span>
        <input type="text" class="form-control" name="apellido" aria-label="Apellido" aria-describedby="basic-addon2">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Tipo de documento</span>
        <input type="text" class="form-control" name="tipo-documento" aria-label="Tipo de documento" required>
        <span class="input-group-text">Número de documento</span>
        <input type="text" class="form-control" name="nro-documento" aria-label="Número de Documento" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Fecha de Nacimiento</span>
        <input type="date" class="form-control" name="fecha-nac" id="basic-url" aria-describedby="basic-addon3">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">E-mail</span>
        <input type="email" class="form-control" name="email" placeholder="@">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Carrera</span>
        <input type="text" class="form-control" name="carrera" aria-describedby="basic-addon3">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Año</span>
        <input type="text" class="form-control" name="año" aria-describedby="basic-addon3">
      </div>
      <div class="input-group">
        <span class="input-group-text">Experiencia</span>
        <textarea class="form-control" name="experiencia" aria-label="¡Comentanos tu experiencia!" required></textarea>
      </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </body>
</html>