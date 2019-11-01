<?php

    include_once 'connect.php';

    if($_POST){

        //recuperar valores
        $nombre=$_POST['nombre'];
        $color=$_POST['color'];

        $sql = $pdo->prepare("INSERT INTO mascota(nombre,color) VALUES (?,?);");
        $ejecutar = $sql->execute([$nombre,$color]);

        if($ejecutar === true) {
            header('Location:mascotas.php');
            echo '<div class="alert alert-success" role="alert">Mascota agregada!</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">No se pudo agregar la mascota!</div>';
        }
    }

    
?>