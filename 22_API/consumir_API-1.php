<?php

  // Incorporar una API
  $url="https://jsonplaceholder.typicode.com/todos";

  $opciones=array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

  $respuesta=file_get_contents($url, false, stream_context_create($opciones)); // Esta línea permite leer la url sin restricciones

  $objRespuesta=json_decode($respuesta);

  // print_r($objRespuesta);

  // Uso el foreach para leer registro por registro y tener un mejor control del contenido

  foreach($objRespuesta as $registro){
    print_r($registro);
    echo "<br><br>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incorporar una API</title>
</head>
<body>
    <!-- También podemos mostrar los resultados en una lista por HTML -->
    <div>
        <ul>
            <?php foreach($objRespuesta as $registro) { ?>
                <li><?php echo $registro->title; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
