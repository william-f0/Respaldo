<?php

    require_once 'connect.php';

    function Consulta_Mostrar(){
        $consulta = "SELECT nombre,imagen FROM mascota";
        $sentencia = $pdo->prepare($consulta,[PDO::ATTR_CURSOR => PDO::CURSOR_SCROL,]);
        //$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        $sentencia->execute();

        while($mascotas = $sentencia->fecthObjetc()){?>
            <tr>
				<td><?php echo $mascota->nombre ?></td>
				<td><?php echo $mascota->imagen ?></td>
			</tr>
    <?php }
    }
?>