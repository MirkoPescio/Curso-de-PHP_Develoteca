<?php include("header.php"); ?>
<br/>
<?php include("conexion.php"); ?>
<br/>

<?php

  if($_POST){
    print_r($_POST);

    $fecha= new DateTime();

    $nombre= $_POST['nombre'];
    $imagen= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $descripcion= $_POST['descripcion'];

    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal, "imagenes/".$imagen);

    $objConexion= new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
    header("location:galeria.php");
  }

  if($_GET){

    // formato del query para eliminar un registro:
    // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 1;

    $id=$_GET['borrar'];
    
    $objConexion= new conexion();

    $imagen= $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);
    header("location:galeria.php");
  }

  $objConexion= new conexion();
  $resultado= $objConexion->consultar("SELECT * FROM `proyectos`");

  // print_r($resultado);

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="galeria.php" method="post" enctype="multipart/form-data">
                        <label for="nombre">Nombre del Proyecto:</label>
                        <input type="text" class="form-control" name="nombre" required><br/>
                        <label for="archivo">Imagen del proyecto:</label>
                        <input type="file" class="form-control" name="archivo" required><br/>
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" class="form-control" id="" rows="3" required>
                        </textarea><br/><br/>

                        <input type="submit" class="btn btn-success" value="Enviar proyecto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $proyecto) { ?>
                            <tr>
                                <td scope="row"><?php echo $proyecto['id']; ?></td>
                                <td><?php echo $proyecto['nombre']; ?></td>
                                <td>
                                    <?php echo $proyecto['imagen']; ?>
                                    <br/>
                                    <img src="imagenes/<?php echo $proyecto['imagen']; ?>" 
                                      alt="<?php echo $proyecto['imagen'];?>"
                                      width="150">
                                </td>
                                <td><?php echo $proyecto['descripcion'] ?></td>
                                <td> <a href="?borrar=<?php echo $proyecto['id']; ?>" class="btn btn-danger" 
                                  role="button">Eliminar</a> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
