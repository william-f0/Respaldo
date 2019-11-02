<?php
    //si no a inicio sesión lo redirigira al index para que lo haga
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
    //incluir la conexion
    include_once 'connect.php';

    //sentencia para mostrar los elementos de la base de datos
    $sql_leer = $pdo->prepare("SELECT id,nombre,color FROM mascota");
    $sql_leer->execute();
    $resultado=$sql_leer->fetchAll();

    if($_GET){
        $id=$_GET['id'];
        $sql_editar = $pdo->prepare('SELECT id,nombre,color FROM mascota WHERE id=?');
        $sql_editar->execute([$id]);
        $resultado_editar = $sql_editar->fetch();

        //var_dump($resultado_editar);
    }
?>
<!--Pagina de Mascotas-->
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
    <!--Contenedor-->
    <div class="container-fluid d-flex flex-row justify-content-between mt-2 bg-info p-2">

        <div class="row">
            <!--Mostrar datos de la base de datos con foreach-->
            <?php foreach($resultado as $masco):?>
            <div class="card ml-3 mt-3" style="width: 18rem;">
                <img src="imagenes/pit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $masco['nombre']; echo '---'.$masco['color']; ?></p>
                    <a href="mascotas.php?id=<?php echo $masco['id'];?>"><button type="button" class="btn btn-success">Editar</button></a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            <?php endforeach ?>
            </div>
            
            <!--Formularios, cambian segun el botón presionado-->
            <div class="col-lg-3 col-md-4 col-sm-5">
                <?php if(!$_GET): ?>
                <form action="guardar.php" method="POST">
                    <h3>Agregar Mascota</h3>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Color de la mascota</label>
                        <input type="text" name="color" class="form-control" id="color" required>
                    </div>
                    <div>
                        <label for="img" class="col-form-label">Imagen</label>
                        <input type="file" name="imagen" class="form-control">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <form action="editar.php" method="GET">
                    <h3>Editar Mascota</h3>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $resultado_editar['id']; ?>">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $resultado_editar['nombre'] ?>" class="form-control" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Color de la mascota</label>
                        <input type="text" name="color" class="form-control" id="color" value="<?php echo $resultado_editar['color'] ?>" required>
                    </div>
                    <div>
                        <label for="img" class="col-form-label">Imagen</label>
                        <input type="file" name="imagen" class="form-control">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="mascotas.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                </form>
                <?php endif ?>

                <button type="button" class="btn btn-danger mt-2"><a class="enlace" href="cerrar_sesion.php">Cerrar Sesión</a></button>
            </div>
        </div>                        
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>