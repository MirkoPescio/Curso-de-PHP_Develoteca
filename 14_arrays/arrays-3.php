<?php

  // Leer arreglos (arrays) en PHP

  $lista_de_videojuegos = array("Uncharted 4", "Metal Gear Solid 2: Sons of Liberty", "Metal Gear Solid 3: Snake Eater",
                                "The Last of Us", "Devil May Cry", "Resident Evil 4", "Batman Arkham City");

  echo "Lista de videojuegos del array: <br><br>";
  echo $lista_de_videojuegos[0]."<br>";
  echo $lista_de_videojuegos[1]."<br>";
  echo $lista_de_videojuegos[2]."<br>";
  echo $lista_de_videojuegos[3]."<br>";
  echo $lista_de_videojuegos[4]."<br>";
  echo $lista_de_videojuegos[5]."<br>";
  echo $lista_de_videojuegos[6]."<br><br>";

  // El índice al que quiero acceder no tiene que ser necesariamente númerico
  // Se puede ver con el siguiente ejemplo

  $plataformas = array("y"=>"YouTube", "t"=>"Twitch", "f"=>"Facebook");

  echo "Plataformas de Streaming: <br><br>";
  echo $plataformas["y"]."<br>";
  echo $plataformas["t"]."<br>";
  echo $plataformas["f"]."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer arreglos en PHP</title>
</head>
<body>
    
</body>
</html>
