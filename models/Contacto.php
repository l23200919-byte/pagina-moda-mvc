<?php
// Modelo Contacto.
// Guarda los datos del formulario en un archivo .txt.

class Contacto {

    public static function guardar($nombre, $correo, $telefono, $mensaje, $fecha) {

        // Carpeta donde se guardará el archivo
        $carpeta = __DIR__ . "/../data";

        // Si la carpeta data no existe, se crea automáticamente
        if (!is_dir($carpeta)) {
            mkdir($carpeta, 0777, true);
        }

        // Ruta completa del archivo txt
        $archivo = $carpeta . "/contactos.txt";

        // Texto que se guardará
        $datos = "Fecha y hora: " . $fecha . PHP_EOL;
        $datos .= "Nombre: " . $nombre . PHP_EOL;
        $datos .= "Correo: " . $correo . PHP_EOL;
        $datos .= "Teléfono: " . $telefono . PHP_EOL;
        $datos .= "Mensaje: " . $mensaje . PHP_EOL;
        $datos .= "----------------------------------------" . PHP_EOL;

        // Guarda los datos en el archivo
        file_put_contents($archivo, $datos, FILE_APPEND);

        // Devuelve los datos para mostrarlos en resultado.php
        return [
            "estado" => "Mensaje enviado correctamente",
            "nombre" => $nombre,
            "correo" => $correo,
            "telefono" => $telefono,
            "mensaje" => $mensaje,
            "fecha" => $fecha
        ];
    }
}
?>