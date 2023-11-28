
<?php
$host = "byez16m96sq6rhn6fwec-mysql.services.clever-cloud.com";
$port = "3306";
$db = "byez16m96sq6rhn6fwec";
$user = "ubgb95dbdz9fiynn";
$password = "HZODpPz7DDjGMCL0ERq4";

try {
    $db = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
}
?>