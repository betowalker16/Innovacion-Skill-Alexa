<?php

    function conectarse(){
        if(!($link = mysqli_connect("localhost","user","password123","frases_usuarios"))){
            die("Error Conectando: " . mysqli_connect_error());
            exit();
        }
       
            return $link;
    }
?>