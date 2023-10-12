<!-- Implementamos el HTML por separado -->

<?php

    if($_GET){
        // Recibir información del formulario HTML (Método POST)
        $nombre = $_GET['txtNombre'];
        echo "Hola, soy ".$nombre;
    }

?>

