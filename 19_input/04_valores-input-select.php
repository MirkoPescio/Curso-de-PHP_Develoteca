<?php

  $txtNombre="";
  $rdgLenguaje="";

  $chkphp="";
  $chkjavascript="";
  $chkpython="";

  $lsSerie="";
  
  if($_POST){

    $txtNombre = (isset($_POST["txtNombre"])) ?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"])) ?$_POST["lenguaje"]:"";

    $chkphp=( isset($_POST["chkphp"])=="si" )?"checked":"";
    $chkjavascript=( isset($_POST["chkjavascript"])=="si" )?"checked":"";
    $chkpython=( isset($_POST["chkpython"])=="si" )?"checked":"";

    $lsSerie=( isset($_POST["lsSerie"]) ) ?$_POST["lsSerie"]:"";

    print_r($_POST);
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores inputSelect</title>
</head>
<body>
    <?php if($_POST){ ?>
        <strong> Hola </strong> <?php echo $txtNombre ?>
        <br />
        <p>El lenguaje de maquetación que mas te gusta es: <strong><?php echo $rdgLenguaje ?></strong></p>
        <p>La serie que mas te gusta es: <strong><?php echo $lsSerie ?></strong></p><br />
    <?php } ?>
    <div>
        <form action="04_valores-input-select.php" method="post">
            Ingrese su nombre: <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
            <br />
            <p>¿Qué tecnología te gusta más?</p>
            <br> PHP : <input type="radio" name="lenguaje" value="php" id="" checked><br />
            <br> HTML : <input type="radio" name="lenguaje" value="html" id=""><br />
            <br> CSS : <input type="radio" name="lenguaje" value="css" id=""><br /><br />

            <span>Estás aprendiendo...</span><br />
            <br /> PHP: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
            <br /> JavaScript: <input type="checkbox" <?php echo $chkjavascript; ?> name="chkjavascript" value="si" id="">
            <br /> Python: <input type="checkbox" <?php echo $chkpython; ?> name="chkpython" value="si" id=""> <br /><br />

            <span>¿Qué serie te gusta?...</span>
            <select name="lsSerie" id="">
                <option value="" disabled>[Ninguna Serie]</option>
                <option value="breakingBad" <?php echo ($lsSerie=="breakingBad")?"selected":""; ?>>Breaking Bad</option>
                <option value="theWalkingDead" <?php echo ($lsSerie=="theWalkingDead")?"selected":""; ?>>The Walking Dead</option>
                <option value="lost" <?php echo ($lsSerie=="lost")?"selected":""; ?>>Lost</option>
            </select><br><br>

            <input type="submit" value="Enviar información">
        </form>
    </div>
</body>
</html>
