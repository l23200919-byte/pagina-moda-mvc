<?php
// Conexión a la base de datos de XAMPP.

$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "formulario_mvc";

$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verifica si hay error de conexión.
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Permite usar acentos y ñ.
$conexion->set_charset("utf8");
?>