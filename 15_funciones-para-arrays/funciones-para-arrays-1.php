<?php

  // Funciones para arrays

  $lista_de_videojuegos = array("Uncharted 4", "Metal Gear Solid 2: Sons of Liberty", "Metal Gear Solid 3: Snake Eater",
                                "The Last of Us", "Devil May Cry", "Resident Evil 4", "Batman Arkham City");

  echo "Funciones para arrays <br><br>";

  // array_push: agrega nuevos valores a un array
  array_push($lista_de_videojuegos, "Death Stranding");
  array_push($lista_de_videojuegos, "FC Football 24");

  print_r($lista_de_videojuegos);

  // array_pop: borra el último elemento del array

  array_pop($lista_de_videojuegos);

  echo "<br><br>aplicando array_pop()<br><br>";
  print_r($lista_de_videojuegos);

  // Todas las funciones para arrays están en la documentación oficial de PHP

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para Arrays</title>
</head>
<body>
    
</body>
</html>