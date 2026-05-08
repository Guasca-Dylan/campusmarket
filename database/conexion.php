<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "campus_market";

try {

    $conexion = new PDO(
        "mysql:host=$servername;port=3306;dbname=$dbname",
        $username,
        $password
    );

    echo "Conexión exitosa";

} catch (PDOException $e) {

    die("Conexión fallida: " . $e->getMessage());

}

?>
