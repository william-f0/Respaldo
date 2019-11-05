<?php

    include_once 'connect.php';

    $id=$_GET['id'];

    $sql_borrar = $pdo->prepare('DELETE FROM mascota WHERE id=?');
    $sql_borrar->execute([$id]);

    header('Location:mascotas.php');

?>