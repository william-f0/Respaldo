<?php
    $host='localhost';
    $db='prueba';
    $username='postgres';
    $password='1234';

    try {
        $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$db", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
    }
?>