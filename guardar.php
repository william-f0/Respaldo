<?php

    include_once 'connect.php';

    if($_POST){

        //recuperar valores
        $nombre=$_POST['nombre'];
        $color=$_POST['color'];

        $sql_guardar = $pdo->prepare("INSERT INTO mascota(nombre,color) VALUES (?,?);");
        $ejecutar = $sql_guardar->execute([$nombre,$color]);

        if($ejecutar === true) {
            header('Location:mascotas.php');
        } else {
            echo "No se pudo guardar el registro";
        }
    }

    
?>