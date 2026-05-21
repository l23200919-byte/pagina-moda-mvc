<?php
require_once "models/Contacto.php";

$contactos = Contacto::obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Contactos | Macario Jiménez</title>
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menuAdmin">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="coleccion.php">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="admin-contenedor">

        <h1 class="admin-titulo">Panel de contactos</h1>
        <p class="admin-subtitulo">
            Administración de mensajes recibidos desde el formulario de contacto.
        </p>

        <div class="admin-acciones-superior">
            <a href="index.php" class="btn-admin-volver">Volver al inicio</a>

            <span class="admin-contador">
                Registros almacenados
            </span>
        </div>

        <div class="tabla-responsive-admin">
            <table class="tabla-admin">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($contactos && $contactos->num_rows > 0) { ?>
                        <?php while ($fila = $contactos->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo htmlspecialchars($fila["nombre"]); ?></td>
                                <td><?php echo htmlspecialchars($fila["correo"]); ?></td>
                                <td><?php echo htmlspecialchars($fila["telefono"]); ?></td>
                                <td class="mensaje-admin"><?php echo htmlspecialchars($fila["mensaje"]); ?></td>
                                <td><?php echo $fila["fecha_registro"]; ?></td>
                                <td>
                                    <a class="btn-editar" href="editar_contacto.php?id=<?php echo $fila['id']; ?>">
                                        Editar
                                    </a>

                                    <a class="btn-eliminar"
                                        href="eliminar_contacto.php?id=<?php echo $fila['id']; ?>"
                                        onclick="return confirm('¿Seguro que deseas eliminar este contacto?');">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="7" class="sin-registros">
                                No hay contactos registrados todavía.
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>