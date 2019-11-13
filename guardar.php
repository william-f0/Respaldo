<?php

    include_once 'connect.php';

    if($_POST){

        //recuperar valores
        $nombre=$_POST['nombre'];
        $color=$_POST['color'];
        $cargar_img=($_FILES['imagen']['tmp_name']);
        $imagen=fopen($cargar_img,'rb');//lectura de imagen en binario

        $sql_guardar = $pdo->prepare("INSERT INTO mascota(nombre,color,imagen) VALUES (:nombre,:color,:imagen);");
        $sql_guardar->bindParam(':nombre',$nombre, PDO::PARAM_STR);
        $sql_guardar->bindParam(':color',$color, PDO::PARAM_STR);
        $sql_guardar->bindParam(':imagen',$imagen, PDO::PARAM_LOB);
        $ejecutar_guardar=$sql_guardar->execute();

        if($ejecutar_guardar === true) {
            header('Location:mascotas.php');
        } else {
            echo "No se pudo guardar el registro";
        }
    }

    
?>