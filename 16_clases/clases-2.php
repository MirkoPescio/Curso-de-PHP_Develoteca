<?php

  class Persona{

    public $nombre; // Propiedades

    public function asignarNombre($nuevoNombre){ // acciones o métodos
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola, soy ".$this->nombre."<br><br>";
    }
  }

  $objAlumno = new Persona(); // a partir de la palabra reservada 'new', creamos un objeto
  $objAlumno->asignarNombre("Mirko");
  $objAlumno->imprimirNombre();

  $objAlumno2 = new Persona();
  $objAlumno2->asignarNombre("Roy");
  $objAlumno2->imprimirNombre();

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
