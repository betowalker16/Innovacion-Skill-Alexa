<?php
  session_set_cookie_params(3600);
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
  <title>Registro de frases y categorías</title>
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

      $user = $_SESSION['usuario'];
      $result = mysqli_query($link,"SELECT * from usuarios WHERE email = '$user';");
      $row = mysqli_fetch_array($result);
      $usuario = $row['id'];

    ?>
    
    <h1>Registro de frase</h1>
    <form method="POST" action="insertarFrase.php">
      <div class="form-group">
        <label for="frase">Frase:</label>
        <textarea class="form-control" id="frase" name="frase" rows="3" placeholder="Ingrese una frase"></textarea>
      </div>
      <div class="form-group">
        <label for="categoria">Categoría:</label>
        <select class="form-control" name="categoria">
          <option value=".">Seleccione una categoría</option>
          <?php
          
          // Recupera las categorías de la base de datos
          $result = mysqli_query($link,"SELECT * FROM categorias WHERE usuario = '$usuario'");
          while($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row["id"]. '">' . $row["nombre"] . '</option>';
          }

          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>
</body>
</html>
