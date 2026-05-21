<?php
// Conexión a la base de datos con mysqli.

$host = "127.0.0.1";
$usuario = "root";
$password = "";
$base_datos = "macario_mvc";
$puerto = 3306;

$conexion = new mysqli($host, $usuario, $password, $base_datos, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>