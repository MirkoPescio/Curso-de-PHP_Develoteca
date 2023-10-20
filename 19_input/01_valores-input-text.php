<?php

  $txtNombre="";

  // isset() sirve para ver si hubo un envío de datos
  
  if($_POST){

    $txtNombre= (isset($_POST["txtNombre"])) ?$_POST["txtNombre"]:"";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores inputText</title>
</head>
<body>
    <!-- También podemos incluir código PHP en la estructura de HTML -->
    <?php if($_POST){ ?>
        <strong> Hola </strong> <?php echo $txtNombre ?>
    <?php } ?>
    <div>
        <form action="01_valores-input-text.php" method="post">
            <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
            <input type="submit" value="Enviar información">
        </form>
    </div>
</body>
</html>
