<?php
// Esta página conecta el formulario de contacto con el controlador.
// Aquí se usa la lógica MVC para procesar los datos.

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Se manda llamar el controlador.
require_once "controllers/ContactoController.php";

// Se crea el objeto del controlador.
$controller = new ContactoController();

// Si el formulario fue enviado, se procesan los datos.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->procesarFormulario();
} else {
    // Si no se envió, se muestra el formulario.
    $controller->mostrarFormulario();
}
?>