<?php
// Configuración de la base de datos
$host = 'localhost';      // Servidor de la base de datos
$dbname = 'APIREST';  // Nombre de la base de datos
$username = 'root';    // Usuario de la base de datos
$password = ''; // Contraseña del usuario

try {
    // Crear la conexión PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Establecer atributos para manejar errores de forma adecuada
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    // Manejo de errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
