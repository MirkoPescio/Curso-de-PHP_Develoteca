<?php include("header.php"); ?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="galeria.php" method="post">
                        <label for="nombre">Nombre del Proyecto:</label>
                        <input type="text" class="form-control" name="nombre"><br/>
                        <label for="archivo">Imagen del proyecto:</label>
                        <input type="file" class="form-control" name="archivo"><br/><br/>

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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Aplicación web</td>
                            <td>app-web.jpg</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

