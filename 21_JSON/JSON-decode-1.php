<?php

  $jsonContenido='[
    {
        "nombre":"Mirko",
        "apellido": "Pescio"
    },
    {
        "nombre":"Oscar",
        "apellido":"Uh"
    },
    {
        "nombre":"Ariel",
        "apellido":"Pérez"
    }
  ]';

  $resultado= json_decode($jsonContenido);
  print_r($resultado);

  // Una mejor forma de leer el resultado es la siguiente: 
    // Con un foreach
  
  echo "<br><br>";

  foreach($resultado as $persona){
    print_r($persona);
  }

  // Para imprimir por propiedad
  echo "<br><br>";

  foreach($resultado as $persona){
    echo ($persona->nombre)." ".($persona->apellido)."<br>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Decode</title>
</head>
<body>
    
</body>
</html>
