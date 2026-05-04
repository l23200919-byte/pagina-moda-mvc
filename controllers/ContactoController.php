<?php
// Controlador del formulario de contacto.
// Recibe los datos por POST, valida y decide qué vista mostrar.

require_once "models/Contacto.php";

class ContactoController {

    // Función para mostrar el formulario.
    public function mostrarFormulario($error = "") {
        require_once "views/formulario.php";
    }

    // Función para procesar el formulario.
    public function procesarFormulario() {

        // Se reciben los datos enviados por el formulario.
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        // Validación: el mensaje debe tener mínimo 10 caracteres.
        if (strlen($mensaje) < 10) {
            $error = "El mensaje debe tener mínimo 10 caracteres.";
            require_once "views/formulario.php";
            return;
        }

        // Se obtiene la fecha y hora actual.
        $fecha = date("d/m/Y H:i:s");

        // Se mandan los datos al modelo para guardarlos.
        $resultado = Contacto::guardar($nombre, $correo, $telefono, $mensaje, $fecha);

        // Se muestra la vista de resultado.
        require_once "views/resultado.php";
    }
}
?>