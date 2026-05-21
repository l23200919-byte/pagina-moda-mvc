<?php
require_once "models/Contacto.php";

if (!isset($_GET["id"])) {
    header("Location: admin_contactos.php");
    exit;
}

$id = intval($_GET["id"]);

Contacto::eliminar($id);

header("Location: admin_contactos.php?eliminado=ok");
exit;
?>