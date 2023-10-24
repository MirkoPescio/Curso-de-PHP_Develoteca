<?php 

  // Incorporar el contenido de un archivo txt

  $archivo="contenido.txt";

  $archivoAbierto=fopen($archivo, "r"); // Incorporo el archivo en formato de lectura

  $contenido=fread($archivoAbierto, filesize($archivo));

  echo $contenido;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir archivo</title>
</head>
<body>
    
</body>
</html>