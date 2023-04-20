<?php

$host = '127.0.0.1';
$port = 20205;

set_time_limit(0);


$sock = socket_create(AF_INET,SOCK_STREAM,0) or die("No pudo crear socket");
$result = socket_bind($sock,$host,$port) or die("Bind error");

$result = socket_listen($sock,3) or die("Listener error");
echo 'Servidor corriendo...';

do{
  $accept = socket_accept($sock) or die('Accept error');
  $msg = socket_read($accept,1024) or die('Reads error in server');
  
  echo "Client says: \t".$msg."\n";
  
  
}while(true);






socket_close($accept,$sock);

?>