
<?php

class Conexion {
    
    public function getConexion(){
        $url = "jdbc:mysql://ubgb95dbdz9fiynn:HZODpPz7DDjGMCL0ERq4@byez16m96sq6rhn6fwec-mysql.services.clever-cloud.com:3306/byez16m96sq6rhn6fwec?useSSL=false&serverTimezone=UTC&useLegacyDateTimeCode=false"; // Reemplazar con la URL de conexión proporcionada por Clever Cloud
        $user = "ubgb95dbdz9fiynn"; // Reemplazar con tu nombre de usuario de la base de datos
        $password = "HZODpPz7DDjGMCL0ERq4"; // Reemplazar con tu contraseña de la base de datos

        // conexión a la base de datos utilizando PDO
        try {
            $db = new PDO("$url;user=$user;password=$password");
            return $db;
        } catch (PDOException $e) {
            // Manejar errores de conexión
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}

?>