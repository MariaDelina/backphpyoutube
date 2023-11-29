
<?php

class Conexion {

    public function getConexion(){
        $host = "byez16m96sq6rhn6fwec-mysql.services.clever-cloud.com"; // Cambiar por la dirección del servidor de Clever Cloud
        $port = "3306"; // Cambiar por el puerto de la base de datos en Clever Cloud
        $db = "byez16m96sq6rhn6fwec"; // Cambiar por el nombre de la base de datos en Clever Cloud
        $user = "ubgb95dbdz9fiynn"; // Cambiar por el nombre de usuario de la base de datos en Clever Cloud
        $password = "HZODpPz7DDjGMCL0ERq4"; // Cambiar por la contraseña de la base de datos en Clever Cloud

        // conexión a la base de datos utilizando PDO
        try {
            $db = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);
            return $db;
        } catch (PDOException $e) {
            // Manejar errores de conexión
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}

?>