<?php
// Registro.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_legal = $_POST["id_legal"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $direccion_electronica = $_POST["direccion_electronica"];
    $clave_acceso = password_hash($_POST["clave_acceso"], PASSWORD_DEFAULT);

    // Aquí iría la lógica para guardar los datos en la base de datos
    require_once 'database/conexion.php';

    $message = '';

    $sql = "INSERT INTO `campus_market`.`usuario` ( `id_legal`, `nombres`, `apellidos`, `direccion_electronica`, `clave_acceso`, `fecha_creacion`) VALUES (
:id_legal, :nombres, :apellidos, :direccion_electronica, :clave_acceso, :fecha_creacion)";
    $stmt = $conexion->prepare($sql);
    $fecha_creacion = date('Y-m-d H:i:s');
    $stmt->bindParam(':id_legal', $id_legal);
    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':direccion_electronica', $direccion_electronica);
    $stmt->bindParam(':clave_acceso', $clave_acceso);
    $stmt->bindParam(':fecha_creacion', $fecha_creacion);

    if ($stmt->execute()) {
    header('Location: ?');
    } else {
    loadHtml('registro');
    }
} else {

    loadHtml('registro');
}
?>