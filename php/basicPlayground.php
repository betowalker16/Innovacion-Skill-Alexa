<?php

// Verificar si una sesión ya está activa
session_set_cookie_params(3600);
if (session_status() == PHP_SESSION_NONE) {
    // Si no hay una sesión activa, iniciar una nueva sesión
    session_start();
    if(isset(($_SESSION['usuario']))){
        header('Location: playground.php');
        die();
    }else{
      
    }
}

    
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Your voice </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    .form-group label {
      font-weight: bold;
    }
    .form-group textarea {
      resize: vertical;
    }
  </style>
</head>
<body>

    <?php 
      include "conex.php";
      $link = conectarse();
      session_set_cookie_params(9600);
      session_start();

        $user = $_SESSION['usuario'];

        $result = mysqli_query($link,"SELECT * from usuarios WHERE email = '$user';");
        $row = mysqli_fetch_array($result);
        $usuario = $row['id'];

    ?>


  <div class="container">
    <form id = 'formTexto' action="playground.php" method="post">
      <div class="form-group">
        <label for="texto">Texto:</label>
        <textarea name = "texto" class="form-control" id="texto" rows="3"></textarea>
      </div>
    </form>
    
  
    <div class="row" style = "padding: 1rem 0 0 0">
      <div class="col-md-4">
        <button type="button" class="btn btn-default btn-block" onclick = "limpiarTextArea()">Limpiar</button>
      </div>
      <div class="col-md-4">
        <button type="button" class="btn btn-success btn-block" onclick ="reproducir()">Reproducir</button>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- SELECT Dinamico-->
  

  <?php
     $host = '127.0.0.1';
     $port = 20205;
  
  ?>


  <script>
    function limpiarTextArea() {
			document.getElementById("texto").value = "";
		}

    function reproducir(){
      const forms = document.getElementById('formTexto');
      var val = document.getElementById("texto").value;
      
      forms.submit();
    }

    
  
</script>

<div class="container">
    <div class="row">
      <div class="col-md-12">
       
        <form action="" id="msgForm">

          <div class="form-group">
          <label for="pitch">Volumen:</label>
          <input type="range" id="volume" name="volume" min="0" max="1" step="0.01" class="form-range form-control-range ">
          </div>

          <div class="form-group">
          <label for="pitch">Velocidad:</label>
          <input type="range" id="rate" name="rate" min="0" max="2" step="0.01" class="form-range form-control-range ">
          </div>
          <div class="form-group">
          <label for="pitch">Pitch:</label>
          <input type="range" id="pitch" name="pitch" min="0" max="2" step="0.01" class="form-range form-control-range ">
          </div>
          <div class="form-group">
            <label for="language">Voz:</label>
            <select id="voiceSelect" name="language" class="form-control mb-3">
              <option value="es-MX" selected>Voz Masculina</option>
              <option value="es-ES">Voz Femenina</option>
              <option value="en-US">Male Voice</option>
            </select>

       
          </div>
        </form>
  
<style>
    input[type=range] {
    height: 34px;
    -webkit-appearance: none;
    margin: 10px 0;
    width: 100%;
    }
    input[type=range]:focus {
      outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
      width: 100%;
      height: 10px;
      cursor: pointer;
      animate: 0.2s;
      box-shadow: 1px 1px 1px #000000;
      background: #3071A9;
      border-radius: 5px;
      border: 1px solid #000000;
    }
    input[type=range]::-webkit-slider-thumb {
      box-shadow: 1px 1px 1px #000000;
      border: 1px solid #000000;
      height: 26px;
      width: 22px;
      border-radius: 6px;
      background: #FFFFFF;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -9px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
      background: #3071A9;
    }
    input[type=range]::-moz-range-track {
      width: 100%;
      height: 10px;
      cursor: pointer;
      animate: 0.2s;
      box-shadow: 1px 1px 1px #000000;
      background: #3071A9;
      border-radius: 5px;
      border: 1px solid #000000;
    }
    input[type=range]::-moz-range-thumb {
      box-shadow: 1px 1px 1px #000000;
      border: 1px solid #000000;
      height: 26px;
      width: 22px;
      border-radius: 6px;
      background: #FFFFFF;
      cursor: pointer;
    }
    input[type=range]::-ms-track {
      width: 100%;
      height: 10px;
      cursor: pointer;
      animate: 0.2s;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }
    input[type=range]::-ms-fill-lower {
      background: #3071A9;
      border: 1px solid #000000;
      border-radius: 10px;
      box-shadow: 1px 1px 1px #000000;
    }
    input[type=range]::-ms-fill-upper {
      background: #3071A9;
      border: 1px solid #000000;
      border-radius: 10px;
      box-shadow: 1px 1px 1px #000000;
    }
    input[type=range]::-ms-thumb {
      margin-top: 1px;
      box-shadow: 1px 1px 1px #000000;
      border: 1px solid #000000;
      height: 26px;
      width: 22px;
      border-radius: 6px;
      background: #FFFFFF;
      cursor: pointer;
    }
    input[type=range]:focus::-ms-fill-lower {
      background: #3071A9; 
    }
    input[type=range]:focus::-ms-fill-upper {
      background: #3071A9;
    }
</style>

      <script>
      document.getElementById('voiceSelect').value = <?php $_POST['language'] ?>;
      document.getElementById('rate').value =1 ;
      document.getElementById('pitch').value =1 ;
      document.getElementById('volume').value =1 ;
      const msgForm = document.getElementById('msgForm');
      const textArea = document.getElementById('textArea');
      

      
      function hablar(mensaje) {
        
        var synthesis = window.speechSynthesis;
        var utterance = new SpeechSynthesisUtterance();
        utterance.text = mensaje;
        utterance.lang = document.getElementById('voiceSelect').value;
        utterance.rate = document.getElementById('rate').value;
        utterance.pitch =  document.getElementById('pitch').value;
        utterance.volume = document.getElementById('volume').value;
        synthesis.speak(utterance);
      }

      <?php

        
       echo "hablar('$msg');"
        
      ?>
  </script>
  
      

    



</body>
</html>