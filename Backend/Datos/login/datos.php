<?php

// Conexion a BD
  function conex()
  {
    $servername = "localhost";
    $username = "Robertormz";
    $password = "roberto";
    $dbname = "c_computo";
    $mysqli = new mysqli($servername, $username, $password,$dbname);
    if($mysqli->connect_error){
      die("Connection failed: " . $mysqli->connect_error);
    }
    $mysqli->set_charset("utf8");
    return $mysqli;
  }


function getUsuarios($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT * FROM personal WHERE email = '$data->email' AND contrasena = '$data->password';");
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
    echo '{"respuesta" : "exito",
      "error" : false }';
  }else{
    echo '{"respuesta" : "error",
      "error" : true }';
  }
  }

?>