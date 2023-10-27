<?php

  session_start();
  if( isset($_SESSION['usuario'])!="mirko" ){
    header("location:login.php"); // Si no se encuentra el usuario, me redirecciona al login
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

    <nav>
        <a href="index.php">Inicio</a> |
        <a href="galeria.php">Galería</a> |
        <a href="cerrar.php">Cerrar</a>
    </nav>