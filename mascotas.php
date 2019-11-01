<?php
    //si no a inicio sesión lo redirigira al index para que lo haga
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
    include_once 'editar.php';
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

    <div class="container d-flex justify-content-center mt-2 bg-info p-2">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="imagenes/pit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Editar</button>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="imagenes/rott.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Editar</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="imagenes/sanb.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Editar</button>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="imagenes/sanb.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Editar</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Agregar</button><hr>
                    <button type="button" class="btn btn-secondary"><a class="enlace" href="cerrar_sesion.php">Salir</a></button>
            </div>
        </div>

    </div>
    
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Actualizar mascota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="guardar.php" method="POST">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Color de la mascota</label>
                    <input type="text" name="color" class="form-control" id="color">
                </div>
                <div>
                    <label for="img" class="col-form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
            </div>
        </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar mascota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="guardar.php" method="POST">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Color de la mascota</label>
                    <input type="text" name="color" class="form-control" id="color">
                </div>
                <div>
                    <label for="img" class="col-form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
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