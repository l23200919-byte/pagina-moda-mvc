<?php
// Modelo Producto.
// Obtiene los productos activos desde la base de datos.

require_once __DIR__ . "/../config/db.php";

class Producto {

    public static function obtenerTodos() {
        global $conexion;

        $sql = "SELECT * FROM productos WHERE estado = 'activo'";
        $resultado = $conexion->query($sql);

        $productos = [];

        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }

        return $productos;
    }
}
?>