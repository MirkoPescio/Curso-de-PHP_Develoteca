<?php

  // Condicionales en PHP

  if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    if($valorA > $valorB){
        echo "El valor de A es mayor que el valor de B";
    } elseif($valorB > $valorA) {
        echo "El valor de B es mayor que el valor de A";
    } else {
        echo "Ambos valores son iguales";
    }

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionales</title>
</head>
<body>
    <div>
        <h2>Operadores relacionales</h2>
    </div>
    <div>
        <form action="operadores-1.php" method="post">
            <label for="ValorA">Valor A: </label>
            <input type="text" name="ValorA">

            <label for="ValorB">Valor B: </label>
            <input type="text" name="ValorB">

            <input type="submit" value="Resolver">
        </form>
    </div>
</body>
</html>
