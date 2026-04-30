<?php

include_once 'utilidades/sesion.php';


if (isLoggedIn()) {
    header('Location: ?');
}
require_once 'database/conexion.php';

if (!empty($_POST['direccion_electronica']) && !empty($_POST['clave_acceso'])) {
    $records = $conexion->prepare('SELECT idusuario, nombres, apellidos, direccion_electronica,clave_acceso FROM usuario WHERE direccion_electronica = :direccion_electronica');
    $records->bindParam(':direccion_electronica', $_POST['direccion_electronica']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['clave_acceso'], $results['clave_acceso'])) {
        setSession('is_logged_in', true);
        setSession('usuario', [
            'idusuario' => $results['idusuario'],
            'nombre_completo' => $results['nombres'] . ' ' . $results['apellidos'],
            'nombre' => $results['nombres'],
            'direccion_electronica' => $results['direccion_electronica']
        ]);
        header("Location: ?");
    } else {
        $message = 'Sorry, those credentials do not match';
    }
} else {
    loadHtml('login');
}

?>