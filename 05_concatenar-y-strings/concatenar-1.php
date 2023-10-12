<!-- Agregamos un condicional -->

<?php

    if($_POST){
        // Recibir información del formulario HTML (Método POST)
        $txtNombre = $_POST['txtNombre'];
        $txtApellido = $_POST['txtApellido'];
        echo "Hola, soy ".$txtNombre." ".$txtApellido;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenación y Strings</title>
</head>
<body>
    <div>
        <h2>Concatenación y Strings</h2>
    </div>
    <br>
    <div>
        <form action="concatenar-1.php" method="post">
            <label for="txtNombre">Nombre: </label>
            <input type="text" name="txtNombre" id="">
            <br />
            <label for="txtNombre">Apellido: </label>
            <input type="text" name="txtApellido" id="">
            <br />
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
