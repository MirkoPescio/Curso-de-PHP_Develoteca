<?php

  $txtNombre="";
  $rdgLenguaje="";

  // isset() sirve para ver si hubo un envío de datos
  
  if($_POST){

    $txtNombre = (isset($_POST["txtNombre"])) ?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"])) ?$_POST["lenguaje"]:"";
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores inputRadio</title>
</head>
<body>
    <!-- También podemos incluir código PHP en la estructura de HTML -->
    <?php if($_POST){ ?>
        <strong> Hola </strong> <?php echo $txtNombre ?>
        <br />
        <p>El lenguaje de maquetación que mas te gusta es: <strong><?php echo $rdgLenguaje ?></strong></p> <br />
    <?php } ?>
    <div>
        <form action="02_valores-input-radio.php" method="post">
            Ingrese su nombre: <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
            <br />
            <p>¿Qué tecnología te gusta más?</p>
            <br> PHP : <input type="radio" name="lenguaje" value="php" id="" checked><br />
            <br> HTML : <input type="radio" name="lenguaje" value="html" id=""><br />
            <br> CSS : <input type="radio" name="lenguaje" value="css" id=""><br /><br />
            <input type="submit" value="Enviar información">
        </form>
    </div>
</body>
</html>
