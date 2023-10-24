<?php

  $nombreArchivo="archivo.txt";
  $contenidoArchivo="Hola, saludos!! Estoy aprendiendo PHP";

  $archivoACrear=fopen($nombreArchivo, "w");

  fwrite($archivoACrear, $contenidoArchivo);

  fclose($archivoACrear);

  echo "Archivo ".$nombreArchivo." creado!!!<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir archivo</title>
</head>
<body>
    
</body>
</html>