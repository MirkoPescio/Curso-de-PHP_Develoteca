<?php

  function imprimirNombre($nombre, $apellido=""){
    // Rutinas (instrucciones)
    echo "Hola ".$nombre." ".$apellido."<br>";
  }

  function imprimirEstudio($estudio){
    echo "Estás estudiando ".$estudio."<br>";
  }

  function main(){
    $nombre = "Mirko";
    $apellido = "Pescio";
    $estudio = "Licenciatura en Sistemas";
    // Llamo a la función
    imprimirNombre($nombre, $apellido);
    imprimirEstudio($estudio);
  }
  main()
  // Hay que recordar que las funciones se pueden llamar todas las veces que sean necesarias
  // Y que son implementadas para evitar tener que reescribir un mismo bloque de código

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    
</body>
</html>
