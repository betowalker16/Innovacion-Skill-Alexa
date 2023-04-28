<?php

session_start();

include "php/conex.php";
$link = conectarse();

if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de inicio de sesión
    header('Location: login.php');
    exit; // Es importante usar exit después de la redirección para asegurarse de que el código se detenga aquí
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Skill AVV Home</title>

    <style>
        /* Estilos para el botón de cerrar sesión */
        .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f44336;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
        }

        /* Estilos para el hover del botón */
        .btn-logout:hover {
            background-color: #c62828;
        }
    </style>
</head>

<body>

<a href="php/cerrar_sesion.php" class="btn-logout">Cerrar Sesión</a>

    <div class="header-index">
        <h2 class="header-index-title">Skill de Asistente de Voz</h2>
    </div>
    <div class="contenedor-header">
        <div class="contenido-header">
            <h2></h2>
            <p></p>
        </div>
        <div class="comando">
            <h3 class="title-comando">Ejecutar Frases</h3>
            <p class="descripcion-comando"> Ingresa para añadir el comando que desees ejecutar en el asistente virtual.</p>
            <a class="button-comando" href="php/playground.php"><span>Guardar</span></a>
        </div>
    </div>

    <div class="comandos">
        <div class="comando">
            <h3 class="title-comando">Registrar una nueva frase</h3>
            <p class="descripcion-comando">Añadir un nueva frase que desees guardar en el asistente virtual</p>
            <a class="button-comando" href="php/guardarFrase.php"><span>Guardar</span></a>
        </div>
        <div class="comando">
            <h3 class="title-comando">Registrar una nueva categoria</h3>
            <p class="descripcion-comando">Añadir un nueva categoria de frases que desees guardar en el asistente virtual</p>
            <a class="button-comando" href="php/guardarCategoria.php"><span>Guardar</span></a>
        </div>      
    </div>

    

    
</body>

</html>