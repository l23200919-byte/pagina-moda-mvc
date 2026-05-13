<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "controllers/ContactoController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ContactoController();
    $controller->procesarFormulario();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado | Macario Jiménez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu">
        <div class="container">
            <a class="navbar-brand marca" href="index.php">Macario Jiménez</a>
        </div>
    </nav>

    <main class="container resultado-contenedor">

        <div class="tarjeta-resultado">

            <h1><?php echo $resultado["estado"]; ?></h1>

            <p><strong>Nombre:</strong> <?php echo $resultado["nombre"]; ?></p>
            <p><strong>Correo:</strong> <?php echo $resultado["correo"]; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $resultado["telefono"]; ?></p>
            <p><strong>Mensaje:</strong> <?php echo $resultado["mensaje"]; ?></p>
            <p><strong>Fecha y hora:</strong> <?php echo $resultado["fecha"]; ?></p>

            <a href="contacto.php" class="btn btn-dorado">
                Volver al formulario
            </a>

        </div>

    </main>

   <footer class="footer-moda" id="footer-contacto">

    <div class="container">

        <div class="row">

            <!-- UBICACIÓN -->
            <div class="col-lg-4 mb-4">
                <h5>Ubicación</h5>

                <iframe
                    src="https://www.google.com/maps?q=Monte%20Líbano%20250,%20Lomas%20de%20Chapultepec,%20Ciudad%20de%20México&z=15&output=embed"
                    width="100%" height="220"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

                <p class="direccion">
                    Dirección: Monte Líbano 250, Lomas de Chapultepec,
                    Miguel Hidalgo, 11000 Ciudad de México, CDMX
                </p>
            </div>

            <!-- FORMULARIO -->
            <div class="col-lg-4 mb-4">

                <h5>Contacto</h5>

                <form method="POST" action="index.php">

                    <input type="text" name="nombre" class="form-control mb-3"
                        placeholder="Nombre" required>

                    <input type="email" name="correo" class="form-control mb-3"
                        placeholder="Correo" required>

                    <input type="text" name="telefono" class="form-control mb-3"
                        placeholder="Teléfono" required>

                    <textarea name="mensaje" rows="4"
                        class="form-control mb-3"
                        placeholder="Mensaje"
                        required></textarea>

                    <button type="submit" class="btn btn-dorado w-100">
                        Enviar
                    </button>

                </form>

            </div>

            <!-- REDES -->
            <div class="col-lg-4 text-center">

                <h5>Redes Sociales</h5>

                <p>Síguenos para conocer nuestras colecciones.</p>

                <div class="redes">

                    <a href="https://www.instagram.com/macariojimenez/" target="_blank">
                        <img src="imagenes/iconos/instagram.png" alt="Instagram">
                    </a>

                    <a href="https://www.facebook.com/MACARIOJIMENEZMX" target="_blank">
                        <img src="imagenes/iconos/face.webp" alt="Facebook">
                    </a>

                </div>

            </div>

        </div>

        <hr>

        <p class="text-center">
            © TecNM Campus Pachuca – Programación Web 2026
        </p>

    </div>

</footer>
<?php if (isset($_GET["enviado"]) && $_GET["enviado"] == "ok") { ?>
    <script>
        alert("Mensaje enviado correctamente");
    </script>
<?php } ?>

<?php if (isset($_GET["error"]) && $_GET["error"] == "mensaje") { ?>
    <script>
        alert("El mensaje debe tener mínimo 10 caracteres");
    </script>
<?php } ?>
</body>
</html>