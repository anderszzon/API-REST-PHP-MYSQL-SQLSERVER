<?php
// Configuración de la base de datos
$serverName = "DESKTOP-8AP7VUU";
$database = "apirest_sqlserver";
$uid = "";
$pass = "";

// Puesto que no se han especificado UID ni PWD en el array $connectionInfo,
// $connectionInfo = array("Database" => "apirest_sqlserver");
// la conexión se intentará utilizando la autenticación Windows.

$connection = [
    "Database" => $database,
    "UID" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect($serverName, $connection);
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
} else {
    //echo 'connection established';
}

$tsql = "SELECT * FROM clientes";
$stmt = sqlsrv_query($conn, $tsql);

if ($stmt == false) {
    echo 'Error';
}

while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo $obj['nombre'] . '</br>';
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

?>
