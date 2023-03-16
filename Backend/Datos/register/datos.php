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


function registroUsuario($data){
    $mysqli   = conex();
    $id = rand(1,10000);
    $sql    = " 
              INSERT INTO personal SET 
              id= ".$id.",
              nombre='". $data->name . "',
              apellidos='" . $data->lastName . "',
              contrasena='". $data->password . "',
              email='". $data->email . "'
              ";
    
    if($result = $mysqli->query($sql)) {
      echo '{
              "respuesta" : "Exito",
              "error" : false
            }';
    }else {
      echo '{
              "respuesta" : "Error",
              "error" : true
            }';
    }
}

?>