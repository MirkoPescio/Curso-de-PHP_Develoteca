<?php

  if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    $suma=$valorA+$valorB;
    echo "Suma = ".$suma."<br><br>";

    $resta=$valorA-$valorB;
    echo "Resta = ".$resta."<br><br>";

    $multiplicacion=$valorA*$valorB;
    echo "Multiplicación = ".$multiplicacion."<br><br>";

    $division=$valorA/$valorB;
    echo "División = ".$division."<br><br>";


    if($valorA==$valorB){

        echo "El valor de A es igual al valor de B <br><br>";

        if($suma%2==0){
            echo "El resultado de la suma es un número par <br><br>";
        }
        if($resta%2==0){
            echo "El resultado de la resta es un número par <br><br>";
        }
        if($multiplicacion%2==0){
            echo "El resultado de la multiplicación es un número par <br><br>";
        }
        if($division%2==0){
            echo "El resultado de la división es un número par <br><br>";
        }
    }

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidado</title>
</head>
<body>
    <div>
        <h2>Condicional múltiple</h2>
    </div>
    <div>
        <form action="if-anidados.php" method="post">
            <label for="ValorA">Valor A: </label>
            <input type="text" name="ValorA">

            <label for="ValorB">Valor B: </label>
            <input type="text" name="ValorB">

            <input type="submit" value="Resolver">
        </form>
    </div>
</body>
</html>