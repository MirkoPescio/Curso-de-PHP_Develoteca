<?php

  // costructor => Nos sirve para asignar valores desde la intancia del objeto y no desde un método

  class Persona{

    function __construct($nuevoNombre, $asignarEdad, $asignarProfesion){

        $this->nombre = $nuevoNombre;
        $this->edad = $asignarEdad;
        $this->profesion = $asignarProfesion;
    }

    public function imprimirNombre(){
        return "Hola, soy ".$this->nombre."<br>";
    }
    public function imprimirEdad(){
        return "Tengo ".$this->edad." años <br>";
    }
    public function imprimirProfesion(){
        return "Me dedico a ".$this->profesion."<br>";
    }
  }

  function main() {
    $persona1 = new Persona("Mirko Pescio", 24, "Operario de depósito");
    print($persona1->imprimirNombre());
    print($persona1->imprimirEdad());
    print($persona1->imprimirProfesion());
  }
  main();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    
</body>
</html>