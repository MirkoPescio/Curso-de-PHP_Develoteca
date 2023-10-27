<?php 

  session_start();
  if($_POST){
    if( ($_POST['usuario']=="mirko") && ($_POST['password']=="12345") ){

        $_SESSION['usuario']="mirko";

        echo "Logueado!!";

        header("location:index.php"); // Redirecciono al usuario a la página principal
    } else {
        // Se puede ejecutar código javascript a través de php
        echo "<script> alert('Login incorrecto'); </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input type="text" class="form-control" name="usuario" id=""><br/>
                            Contraseña: <input type="password" class="form-control" name="password" id=""><br/><br/>

                            <button type="submit" class="btn btn-success">Entrar al portfolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
