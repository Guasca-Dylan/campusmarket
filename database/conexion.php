<?php

$host = "127.0.0.1";
$port = "3306";
$db   = "campus_market";
$user = "root";
$pass = "";

try {

    $conexion = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );

    echo "🔥 CONEXIÓN EXITOSA 🔥";

} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}

?>
