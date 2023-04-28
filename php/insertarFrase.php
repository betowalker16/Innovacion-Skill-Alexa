<?php 

session_set_cookie_params(3600);
session_start();


if(isset($_SESSION['usuario'])) {
    
    include "conex.php";
    $link = conectarse();

    

    $usuario = $_SESSION['usuario'];
    $texto = $_POST["frase"];
    $categoria = $_POST["categoria"];
    

    $result = mysqli_query($link,"SELECT * from usuarios WHERE email = '$usuario';");
    $row = mysqli_fetch_array($result);
    $usuario = $row['id'];
    

    if(!mysqli_query($link, "insert into frases (texto,categoria_id,usuario_id) values ('$texto','$categoria','$usuario')")){
        echo "Error al insertar";
    }else{
    header("Location: ../index.php");
    die();
        /*
        $result = mysqli_query($link,"SELECT * from frases;");
        echo "<table class ='table table-striped' border = '1'>";
        while($row = mysqli_fetch_array($result)){
            $id = $row["id"];
            $user = $row["texto"];
            $email = $row["categoria_id"];
            $password = $row["usuario_id"];
            echo "<tr><td>$id</td><td>$user</td><td>$email</td><td>$password</td></tr>";
        }
        echo "</table>";
        */
        
    }

} else {

    header("Location: login.php");
    die();
}

?>