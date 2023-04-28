<?php

  session_start();

  if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de inicio de sesión
    header('Location: ../login.php');
    exit; // Es importante usar exit después de la redirección para asegurarse de que el código se detenga aquí
  }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Registro de categorías</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">

    
    <?php 
      include "conex.php";
      $link = conectarse();
    ?>
    
    <h1>Registro de categorías</h1>
    <form method="POST" action="insertarCategoria.php">
      <div class="form-group">
        <label for="frase">Frase:</label>
        <textarea class="form-control" id="frase" name="frase" rows="3" placeholder="Ingrese una categoria"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>
</body>
</html>
