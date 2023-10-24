<?php

  if($_POST){
    print_r($_POST);

    print_r($_FILES['archivo']['name']);

    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar archivo</title>
</head>
<body>
    <div>
        <form action="guardar-archivo-1.php" enctype="multipart/form-data" method="post">

            <span>Imagen: </span><br>
            <input type="file" name="archivo" id=""><br /><br />

            <input type="submit" name="enviar" value="Enviar información">
        </form>
    </div>
</body>
</html>
