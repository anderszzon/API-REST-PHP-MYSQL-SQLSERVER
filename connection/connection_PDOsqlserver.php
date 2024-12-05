<?php
// Configuración de la base de datos
$host = 'DESKTOP-8AP7VUU';         // Servidor de la base de datos (puede ser una IP o hostname)
$dbname = 'apirest_sqlserver';     // Nombre de la base de datos
$username = '';       // Usuario de la base de datos
$password = '';    // Contraseña del usuario

try {
    // Crear la conexión PDO
    $dsn = "sqlsrv:Server=$host;Database=$dbname";
    $pdo = new PDO($dsn, $username, $password);

    // Establecer atributos para manejar errores de forma adecuada
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos SQL Server";
} catch (PDOException $e) {
    // Manejo de errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
