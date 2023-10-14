<?php

  if($_POST){
    $boton=$_POST['btnValor'];

    switch($boton){

        case "Rojo":
            echo "Presionó el botón de color rojo";
            break;
        case "Azul":
            echo "Presionó el botón de color azul";
            break;
        case "Verde":
            echo "Presionó el botón de color verde";
            break;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <div>
        <form action="switch-1.php" method="post">
            <input type="button" name="btnValor" value="Rojo"><br><br>
            <input type="button" name="btnValor" value="Azul"><br><br>
            <input type="button" name="btnValor" value="Verde"><br><br>
        </form>
    </div>
</body>
</html>
