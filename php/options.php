<?php
session_set_cookie_params(3600);
session_start();

// Acceder a la variable de sesión
echo 'Bienvenido, ' . $_SESSION['usuario'];

if (isset($_POST['cerrar_sesion'])) {
  // Cerrar la sesión al hacer clic en el botón de cerrar sesión
  session_destroy();
  header("Location: ../login.php"); // Redireccionar a la página de inicio de sesión
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Índice</title>
  <!-- Enlazar archivos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .jumbotron {
      background-color: #343a40;
      color: #fff;
    }
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="jumbotron text-center">
    <h1 class="display-4">Bienvenido al índice</h1>
    <p class="lead">Selecciona una opción para continuar</p>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
      <button class="btn btn-primary btn-lg btn-block mb-4" onclick="window.open('playground.php', '_blank')">Playground</button>
      </div>
      <div class="col-md-4">
        <button class="btn btn-success btn-lg btn-block mb-4" onclick="location.href='guardarFrase.php'">Guardar frase</button>
      </div>
      <div class="col-md-4">
        <button class="btn btn-info btn-lg btn-block mb-4" onclick="location.href='guardarCategoria.php'">Guardar categoría</button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <!-- Botón de cerrar sesión -->
        <form method="post">
          <input type="submit" class="btn btn-danger btn-lg btn-block" name="cerrar_sesion" value="Cerrar sesión">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
