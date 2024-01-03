<?php
try {
    // Configuración de la conexión
    $dbHost = 'localhost';
    $dbName = 'datos2023';
    $dbUser = 'root';
    $dbPass = '123456';

    // Opciones de PDO
    $options = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    );

    // Crear la instancia de PDO
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass, $options);
} catch (PDOException $e) {
    // Manejar errores de conexión
    die("Error de conexión: " . $e->getMessage());
}
?>
