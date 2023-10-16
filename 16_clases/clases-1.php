<?php

  class Persona{

    public $nombre; // Propiedades

    public function asignarNombre($nuevoNombre){ // acciones o métodos
        $this->nombre = $nuevoNombre;
    }
  }

  $objAlumno = new Persona(); // a partir de la palabra reservada 'new', creamos un objeto
  $objAlumno->asignarNombre("Mirko");

  echo $objAlumno->nombre."<br><br>"; // Imprimo una propiedad del objeto

  $objAlumno2 = new Persona();
  $objAlumno2->asignarNombre("Demian");

  echo $objAlumno2->nombre."<br><br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    
</body>
</html>
