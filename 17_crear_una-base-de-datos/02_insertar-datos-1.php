<?php

  require('../vendor/autoload.php');

  $dotenv = Dotenv\Dotenv::createImmutable('../');
  $dotenv->load();

  $servidor=$_ENV['servidor']; // 127.0.0.1
  $usuario=$_ENV['usuario'];
  $password=$_ENV['password'];

  try{
    // Bloque de código que se ejecuta si no hay error

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $password); 
    // PDO es una clase reservada que me permite conectarme a la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";
    $conexion->exec($sql);

    echo "Conexión establecida";
  }catch(PDOException $error){
    // Bloque de código que se ejecuta si hay error
    echo "Error de conexión a la base de datos. <br><br>".$error;
  }


  // INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Segunda foto', 'foto-2.jpg');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
</head>
<body>
    
</body>
</html>