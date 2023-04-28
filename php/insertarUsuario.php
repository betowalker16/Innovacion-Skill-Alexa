<?php 
include "conex.php";
$link = conectarse();
    

    $usuario = $_POST["UserName"];
    $email = $_POST["emailSign"];
    $password = $_POST["password"];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    
    if(!mysqli_query($link, "insert into usuarios (username,password,email,nombres,apellidos) values ('$usuario','$password','$email','$nombres', '$apellidos')")){
       
        header("Location: signUp.php");
        die();
    }else{
        $_SESSION['usuario'] = $email;
        header("Location: ../index.php");
        die();
        
    }

?>