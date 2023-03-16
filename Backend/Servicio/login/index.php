<?php
  /* Errores de PHP */

  $debug =  true;
  if(isset($debug))
  {
    if($debug)
    {
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1); 
      error_reporting(E_ALL); 
    }
  }
  
  /* Header Request */
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: POST,GET,PATCH,DELETE");
  header("Access-Control-Max-Age: 3600");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include '/var/www/html/proyecto_final/datos/login/datos.php';  

  /* Código */

  if($_SERVER['REQUEST_METHOD'] == 'GET') 
  {
    if($data = json_decode(file_get_contents("php://input")))
    { 
      
       if(isset($data->email) and isset($data->password))
       {   
            $response = getUsuarios($data);
       }
    }
  }

?>