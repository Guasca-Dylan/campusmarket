<?php
include_once 'utilidades/sesion.php';
// gotoHome();
$usuario = getSession('usuario');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CampusMarket</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="images/ICONO.jpg">
</head>

<body>

    <header>
        <h1>CampusMarket</h1>
        <nav>
            <?php
            if ($usuario != null) {
                echo '<span class="rounded-1 bg-info p-2" >&#128100 ' . htmlspecialchars($usuario['nombre']) . "</span>";
            }
            ?>
            <a href="?page=registro">Registro</a>
            <a href="?page">Inicio </a>
            <a href="?page=perfil">Perfil</a>
            <a href="?page=productos">Productos</a>
            <a href="?page=publicar">Publicar</a>
            <?php
            if (isLoggedIn()) {
                echo '<a href="?page=logout">Logout</a>';
            } else {
                echo '<a href="?page=login">Login</a>';
            }
            ?>
        </nav>
    </header>