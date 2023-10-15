<?php

  // Ejemplo anterior, pero ahora, recorriendo el array
  // Los podemos recorrer con for o con foreach

  $lista_de_videojuegos = array("Uncharted 4", "Metal Gear Solid 2: Sons of Liberty", "Metal Gear Solid 3: Snake Eater",
                                "The Last of Us", "Devil May Cry", "Resident Evil 4", "Batman Arkham City");

  echo "Lista de videojuegos del array: <br><br>";
  
  for($indice=0; $indice<sizeof($lista_de_videojuegos); $indice++){

    echo $lista_de_videojuegos[$indice]."<br>";
  }

  $plataformas = array("y"=>"YouTube", "t"=>"Twitch", "f"=>"Facebook");

  echo "<br>Plataformas de Streaming: <br><br>";

  foreach($plataformas as $indice=>&$valor){

    echo $valor." tiene el índice: ".$indice."<br>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer arreglos en PHP</title>
</head>
<body>
    
</body>
</html>
