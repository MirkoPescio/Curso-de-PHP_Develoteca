<?php

  // Vamos a ver cómo destruir variables de session

  session_start();

  $_SESSION["usuarioInvitado"]="invitado";
  $_SESSION["statusInvitado"]="logueado";

  echo "Sesión iniciada"."<br><br>";

  echo "Usuario: ".$_SESSION["usuarioInvitado"]."<br> Estado: ".$_SESSION["statusInvitado"]."<br><br>";

  session_destroy();

  echo "<br>Destrucción de la sesión<br>";
  echo "Usuario deslogueado";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir variables de session</title>
</head>
<body>
    
</body>
</html>