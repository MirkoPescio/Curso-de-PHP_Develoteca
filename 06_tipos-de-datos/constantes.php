<?php

  $edad=32; // variable

  echo $edad."<br><br>";

  $edad=40; // Redefino el valor de la variable

  echo $edad."<br><br>";

  // Lo que va a pasar es que se va a pisar el valor de edad y va a mostrar el último que definí

  // Uso de constante
  define("NOMBRE", "Snake");

  // Imprimo la constante
  echo NOMBRE."<br><br>";

  // NOMBRE="Ocelot";   Como es una constante no se nos va a permitir cambiar su valor

?>