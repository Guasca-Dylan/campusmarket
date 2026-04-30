<?php
include_once 'utilidades/sesion.php';

if (isLoggedIn()) {
    logout();
}

header('Location: ?');
exit;
