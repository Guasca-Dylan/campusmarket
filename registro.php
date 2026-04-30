<?php
include_once("conexion.php");

$id_legal = $_POST['id_legal'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['direccion_electronica'];
$clave = $_POST['clave_acceso'];

$clave_segura = password_hash($clave, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario 
(id_legal, nombres, apellidos, direccion_electronica, clave_acceso, fecha_creacion)
VALUES 
('$id_legal', '$nombres', '$apellidos', '$correo', '$clave_segura', NOW())";

if ($conexion->query($sql)) {
    echo "Registro exitoso 😎";
} else {
    echo "Error: " . $conexion->error;
}
?>