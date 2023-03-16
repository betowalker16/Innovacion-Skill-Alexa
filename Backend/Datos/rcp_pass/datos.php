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


function getEmail($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT * FROM personal WHERE email = '$data->email';");
  $row = mysqli_fetch_array($result);
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
    echo '{"respuesta" : "'. $row["contrasena"] .'",
           "error" : false }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }

?>