<?php

session_start();

include "conex.php";
$link = conectarse();
$usuario = $_POST['UserName'];
$password = $_POST['password'];

$result = mysqli_query($link, "SELECT * from usuarios WHERE email = '$usuario';");

if (mysqli_num_rows($result) == 1) {
    $fila = mysqli_fetch_assoc($result);
    // Verificar la contraseña
    if ($fila['password'] == $password) {
        // Inicio de sesión exitoso, redireccionar a la página de inicio
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        
        header("Location: login.php");
        exit();
    }
} else {
    
    header("Location: login.php");
    exit();
}

?>
