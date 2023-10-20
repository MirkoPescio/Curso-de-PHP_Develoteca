<?php

  // Cómo corroborar si los datos de una sesión fueron eliminados correctamente

  session_start();

  if( isset($_SESSION["usuarioInvitado"]) ){
    echo "Usuario: ".$_SESSION["usuarioInvitado"]."<br> Estado: ".$_SESSION["statusInvitado"]."<br><br>";
  }else{
    echo "No hay datos";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corroborar datos de session</title>
</head>
<body>
    
</body>
</html>
