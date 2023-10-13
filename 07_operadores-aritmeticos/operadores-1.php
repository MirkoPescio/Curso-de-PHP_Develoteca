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
    echo "División = ".$division."<br>";

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <div>
        <h2>Operadores aritmeticos</h2>
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