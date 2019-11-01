<?php

    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $color=$_GET['color'];

    include_once 'connect.php';

    $sql_edit = 'UPDATE mascota SET nombre=?,color=? WHERE (id=?)';
    $ejecutar_edit = $pdo->prepare($sql_edit);
    $ejecutar_edit->execute([$nombre,$color.$id]);

    header('Location:mascotas.php');

?>