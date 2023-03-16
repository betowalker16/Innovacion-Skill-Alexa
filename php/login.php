<?php

// ini_set('display_errors', 1);
//       ini_set('display_startup_errors', 1); 
//       error_reporting(E_ALL); 

function curl_api($url,$metodo,$datos){
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_ENCODING        => '',
    CURLOPT_MAXREDIRS       => 10,
    CURLOPT_TIMEOUT         => 0,
    CURLOPT_FOLLOWLOCATION  => true,
    CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST   => $metodo,
    CURLOPT_POSTFIELDS      => $datos,
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}

$email = $_POST["email"];    
$password = $_POST["password"];

$data = array(
        "email" => $email,
        "password" => $password
        );

$data = json_encode($data);
$response = curl_api('https://api.upaepcuc.com/proyecto_final/servicio/login/','GET',$data);
echo($response);

?>
