<?php

    require_once 'connect.php';

    $sql = 'SELECT nombre,color,imagen FROM mascota';
    $ejecutar = $pdo->prepare($sql);
    $ejecutar->execute();

    $resultado = $ejecutar->fetchAll();

?>