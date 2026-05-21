<?php
// Controlador Producto.
// Pide los productos al modelo.

require_once __DIR__ . "/../models/Producto.php";

class ProductoController {

    public function obtenerCatalogo() {
        return Producto::obtenerTodos();
    }
}
?>