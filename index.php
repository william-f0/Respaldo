<?php
    //si ya se inicio sesion y va a ingresar de nuevo, simplemente lo redirige automaticamente
    session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: mascotas.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-3 col-md-6 col-sm-9">
            <h2 class="display-4 p-2 text-center">Inicio</h2>
            <ul class="list-group">
                <li class="list-group-item text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Iniciar sesión</button></li>
                <li class="list-group-item text-center"><button type="button" class="btn btn-primary"><a class="enlace" href="mascotas.php">Ver mascotas</a></button></li>
            </ul>
        </div>
    </div>

    <div class="formulario modal fade text-center w-25" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title titulo" id="exampleModalLabel1">Iniciar sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="validar.php" method="POST">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control text-center" id="nombre" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Contraseña</label>
                    <input type="password" name="contrasena" class="form-control text-center" id="color" placeholder="Contraseña" required>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Iniciar</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>