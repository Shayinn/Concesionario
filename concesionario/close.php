<?php
// Cerrar sesion

include './conn.php';
session_start();
include './inicio_sin_log.php';
session_destroy();

?>