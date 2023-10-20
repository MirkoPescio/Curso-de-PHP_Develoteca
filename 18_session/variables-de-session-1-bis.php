<?php
  
  // session nos va a servir para mantener información en cualquier página mientras el navegador esté abierto
  session_start();

  echo "Sesión iniciada"."<br><br>";

  echo "Usuario: ".$_SESSION["usuario"]."<br> Estado: ".$_SESSION["status"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de session (bis)</title>
</head>
<body>
    
</body>
</html>
