<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: mascotas.php');
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contrasena'];

        require_once 'connect.php';
    

        $sql = $pdo->prepare("SELECT * FROM usuario WHERE usuario=:usuario AND contrasena=:contrasena");
        //$data=[':usuario'=>$usuario,
          //  ':contraseña'=>$contraseña];

        $sql->execute(array(':usuario'=>$usuario,':contrasena'=>$contraseña));

        $resultado = $sql->fetch();

        if($resultado !== false){
            $_SESSION['usuario']=$usuario;
            //echo'<script type="text-javascript">alert("Iniciado");window.location.assign("mascotas.php")';
            header('Location:mascotas.php');
        }else{
            header('Location:index.php');
        }

    }

?>