<?php

  require('../vendor/autoload.php');

  $dotenv = Dotenv\Dotenv::createImmutable('../');
  $dotenv->load();

  $servidor=$_ENV['servidor']; // 127.0.0.1
  $usuario=$_ENV['usuario'];
  $password=$_ENV['password'];

  try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`;";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    // Formas de mostrar los datos por pantalla (2 formas)

    // Con print_r()
    print_r($resultado);

    echo "<br><br><br>";

    // Con foreach
    foreach($resultado as $foto){
        print_r($foto);
    }

    // Podemos acceder incluso a una propiedad como lo puede ser el nombre:
    echo "<br><br><br>";

    // Con foreach
    foreach($resultado as $foto){
        print_r($foto['nombre']."<br>");
    }

    echo "<br><br><br>Conexión establecida<br><br>";

  }catch(PDOException $error){
    echo "Error de conexión a la base de datos. <br><br>".$error;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer datos</title>
</head>
<body>
    
</body>
</html>