<?php

  if($_POST){
    print_r($_POST);

    print_r($_FILES);
    echo "<br>";
    print_r($_FILES['archivo']['name']); // Para obtener el nombre del archivo
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores input file</title>
</head>
<body>
    <div>
        <form action="06_valores-input-file.php" enctype="multipart/form-data" method="post">

            <span>Imagen: </span><br>
            <input type="file" name="archivo" id=""><br /><br />

            <input type="submit" name="enviar" value="Enviar información">
        </form>
    </div>
</body>
</html>
