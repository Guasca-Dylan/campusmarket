<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus_market";

// Crear conexión
try {
  $conexion  = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
} catch (PDOException $e) {
  die('Conexión fallida: ' . $e->getMessage());
}
