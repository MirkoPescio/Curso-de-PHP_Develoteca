<?php

  // Visibilidad de las propiedades y métodos
  // Vemos las palabras reservadas de public y private

  class Persona{

    public $nombre;
    private $edad;
    protected $peso;

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
    public function imprimirPeso($asignarPeso){
        $this->peso = $asignarPeso;
        return "Peso ".$asignarPeso." Kg <br>";
    }
  }

  $objAlumno = new Persona(); // a partir de la palabra reservada 'new', creamos un objeto
  $objAlumno->asignarNombre("Mirko");
  $objAlumno->imprimirNombre();

  $objAlumno2 = new Persona();
  $objAlumno2->asignarNombre("Roy");
  $objAlumno2->imprimirNombre();

  echo "Muestro Datos por separado: <br><br>";
  // echo $objAlumno2->nombre." <br>"; // public => dato público
  // echo $objAlumno2->edad." <br>"; // private => dato privado
  // echo $objAlumno2->peso." <br>"; // protected => dato protegido

  // ¿cómo puedo acceder a un dato privado (private)? Declarando un método public en la clase (ver línea/s 19 - 21)
  echo $objAlumno2->nombre." <br>";
  print($objAlumno2->imprimirEdad("21"));
  print($objAlumno2->imprimirPeso("74"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidad de Datos</title>
</head>
<body>
    
</body>
</html>
