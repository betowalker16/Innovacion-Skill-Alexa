<?php 
include "conex.php";
$link = conectarse();
    

    $usuario = $_POST["UserName"];
    $email = $_POST["emailSign"];
    $password = $_POST["password"];
    
    if(!mysqli_query($link, "insert into usuarios (username,password,email) values ('$usuario','$password','$email')")){
       
        header("Location: signUp.php");
        die();
    }else{
        $_SESSION['usuario'] = $email;
        header("Location: index.php");
        die();
        
    }

?>