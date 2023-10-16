<?php

  class Persona{

    public $nombre;
    private $edad;

    public function asignarNombre($nuevoNombre){

        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola, soy ".$this->nombre."<br><br>";
    }
    public function imprimirEdad($asignarEdad){
        $this->edad = $asignarEdad;
        return "Tengo ".$asignarEdad." años <br>";
    }
  }

  class Trabajador extends Persona{
    public $puesto;

    public function presentacionTrabajador(){
        return "Hola, soy ".$this->nombre." y soy un ".$this->puesto."<br><br>";
    }
  }

  function main() {
    $objPersona = new Persona();
    $objPersona->asignarNombre("Franco");
    $objTrabajador = new Trabajador();
    $objTrabajador->asignarNombre("Sebastián");
    $objTrabajador->puesto="Operario de depósito";
    print($objTrabajador->presentacionTrabajador());
  }
  main();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>
<body>
    
</body>
</html>