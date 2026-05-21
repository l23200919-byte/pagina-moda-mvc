<?php
// Modelo Contacto.
// Guarda, obtiene, actualiza y elimina los datos del formulario en MySQL.

require_once __DIR__ . "/../conexion.php";

class Contacto {

    public static function guardar($nombre, $correo, $telefono, $mensaje, $fecha) {
        global $conexion;

        $sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje, fecha_registro)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conexion->prepare($sql);

        if (!$stmt) {
            die("Error en la consulta: " . $conexion->error);
        }

        $stmt->bind_param("sssss", $nombre, $correo, $telefono, $mensaje, $fecha);

        if (!$stmt->execute()) {
            die("Error al guardar: " . $stmt->error);
        }

        $stmt->close();
    }

    public static function obtenerTodos() {
        global $conexion;

        $sql = "SELECT id, nombre, correo, telefono, mensaje, fecha_registro 
                FROM contactos 
                ORDER BY fecha_registro DESC";

        return $conexion->query($sql);
    }

    public static function obtenerPorId($id) {
        global $conexion;

        $sql = "SELECT id, nombre, correo, telefono, mensaje, fecha_registro 
                FROM contactos 
                WHERE id = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public static function actualizar($id, $nombre, $correo, $telefono, $mensaje) {
        global $conexion;

        $sql = "UPDATE contactos 
                SET nombre = ?, correo = ?, telefono = ?, mensaje = ? 
                WHERE id = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssssi", $nombre, $correo, $telefono, $mensaje, $id);

        return $stmt->execute();
    }

    public static function eliminar($id) {
        global $conexion;

        $sql = "DELETE FROM contactos WHERE id = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
?>