<?php

  if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "El valor de A es distinto y mayor que el valor de B";
    } elseif(($valorA != $valorB) && ($valorA < $valorB)) {
        echo "El valor de B es distinto y mayor que el valor de A";
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
    <title>Operadores logicos</title>
</head>
<body>
    <div>
        <h2>Operadores logicos</h2>
    </div>
    <div>
        <form action="op-logicos-1.php" method="post">
            <label for="ValorA">Valor A: </label>
            <input type="text" name="ValorA">

            <label for="ValorB">Valor B: </label>
            <input type="text" name="ValorB">

            <input type="submit" value="Resolver">
        </form>
    </div>
</body>
</html>
