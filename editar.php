<?php

    //echo 'editar.php?id=13&nombre=Doberman&color=Negro';

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $color=$_GET['color'];

        include_once 'connect.php';

        $sql_edit = 'UPDATE mascota SET nombre=?,color=? WHERE id=?';
        $ejecutar_edit = $pdo->prepare($sql_edit);
        $ejecutar_edit->execute([$nombre,$color,$id]);

        //recarga la pagina para ver el nuevo elemento incluido
        header('Location:mascotas.php');
    }

?>