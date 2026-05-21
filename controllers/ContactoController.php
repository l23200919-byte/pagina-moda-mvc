<?php
require_once "models/Contacto.php";

class ContactoController {

    public function mostrarFormulario() {
        require_once "views/formulario.php";
    }

    public function procesarFormulario() {

        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
        $mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";

        if ($nombre == "" || $correo == "" || $mensaje == "") {
            header("Location: index.php?error=campos#footer-contacto");
            exit;
        }

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            header("Location: index.php?error=correo#footer-contacto");
            exit;
        }

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