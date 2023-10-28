<?php include("header.php"); ?>
<?php include("conexion.php"); ?>

<?php
 
  $objConexion= new conexion();
  $proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>

    
    <br/><hr/><br/>
    <div>
        <p>Mi Portfolio</p>
    </div>

    <div class="p-5 bg-light">
        <div class="container">
            <h2 class="display-3">Bienvenidos</h2>
            <p class="lead">Este es un portfolio privado</p>
            <hr class="my-2">
            <p>Más información</p>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($proyectos as $proyecto) { ?>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top"
                          alt="<?php echo $proyecto['imagen']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
                            <p class="cart-text"><?php echo $proyecto['descripcion']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

<?php include("footer.php"); ?>
