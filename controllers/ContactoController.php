<?php
require_once "models/Contacto.php";

class ContactoController {

    public function procesarFormulario() {

        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        if (strlen($mensaje) < 10) {
            header("Location: index.php?error=mensaje#footer-contacto");
            exit;
        }

        $fecha = date("Y-m-d H:i:s");

        Contacto::guardar($nombre, $correo, $telefono, $mensaje, $fecha);

        header("Location: index.php?enviado=ok#footer-contacto");
        exit;
    }
}
?>