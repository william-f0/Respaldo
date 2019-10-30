<?php

    if (!isset($_POST["nombre"]) || !isset($_POST["color"])) {
        exit();
    }


    include_once 'connect.php';

    //recuperar valores
    $nombre=$_POST['nombre'];
    $color=$_POST['color'];

    $sql = $pdo->prepare("INSERT INTO mascota(nombre,color) VALUES (?,?);");
    $ejecutar = $sql->execute([$nombre,$color]);

    if($ejecutar === true) {
        echo "Registro guardado correctamente";
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }

    
?>