<?php

  class UnaClase{
  
    public static function unMetodo(){
        echo "Hola, soy un método estático <br><br>";
    }
  }

  $obj = new UnaClase();
  $obj->unMetodo();

  // Sin embargo, la forma más correcta de acceder a un método estático es la siguiente:

  unaClase::unMetodo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos estaticos</title>
</head>
<body>
    
</body>
</html>
