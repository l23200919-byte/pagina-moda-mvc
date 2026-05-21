<?php
require_once "models/Contacto.php";

if (!isset($_GET["id"])) {
    header("Location: admin_contactos.php");
    exit;
}

$id = intval($_GET["id"]);
$contacto = Contacto::obtenerPorId($id);

if (!$contacto) {
    header("Location: admin_contactos.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
    $mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";

    if ($nombre == "" || $correo == "" || $mensaje == "") {
        $error = "Por favor llena los campos obligatorios.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = "El correo no es válido.";
    } elseif (strlen($mensaje) < 10) {
        $error = "El mensaje debe tener mínimo 10 caracteres.";
    } else {
        Contacto::actualizar($id, $nombre, $correo, $telefono, $mensaje);
        header("Location: admin_contactos.php?actualizado=ok");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Contacto | Macario Jiménez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos del proyecto -->
    <link rel="stylesheet" href="estilo.css?v=20">
</head>

<body class="admin-body">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu">
        <div class="container">
            <a class="navbar-brand marca" href="index.php">Macario Jiménez</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuEditar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menuEditar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_contactos.php">Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="admin-contenedor">

        <h1 class="admin-titulo">Editar contacto</h1>
        <p class="admin-subtitulo">
            Modifica la información registrada desde el formulario de contacto.
        </p>

        <?php if ($error != "") { ?>
            <div class="alert alert-danger text-center">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <form method="POST" class="form-admin">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                value="<?php echo htmlspecialchars($contacto['nombre']); ?>" required>

            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo"
                value="<?php echo htmlspecialchars($contacto['correo']); ?>" required>

            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono"
                value="<?php echo htmlspecialchars($contacto['telefono']); ?>">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" required><?php echo htmlspecialchars($contacto['mensaje']); ?></textarea>

            <div class="acciones-form-admin">
                <button type="submit" class="btn-actualizar">
                    Actualizar contacto
                </button>

                <a href="admin_contactos.php" class="btn-cancelar">
                    Cancelar
                </a>
            </div>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>