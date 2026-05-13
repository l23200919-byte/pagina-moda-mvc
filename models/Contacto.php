<?php
// Modelo Contacto.
// Guarda los datos del formulario en la base de datos MySQL.

require_once __DIR__ . "/../config/db.php";

class Contacto {

    public static function guardar($nombre, $correo, $telefono, $mensaje, $fecha) {

        global $conexion;

        // Consulta SQL preparada para evitar errores e inyecciones.
        $sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje, fecha)
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
}
?>