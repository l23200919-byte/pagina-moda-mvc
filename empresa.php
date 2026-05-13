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
    <title>Empresa | Macario Jiménez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu">
        <div class="container">
            <a class="navbar-brand marca" href="index.php">Macario Jiménez</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="empresa.php">Empresa</a></li>
                    <li class="nav-item"><a class="nav-link" href="coleccion.php">Colección</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasarela.php">Pasarela</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado -->
    <header class="hero-secundario">
        <div class="hero-texto">
            <p class="subtitulo">Sobre la marca</p>
            <h1>Empresa</h1>
        </div>
    </header>

    <main class="container">

        <section>
            <h2>Elegancia con identidad</h2>

            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <div class="tarjeta destacada">
                        <p>
                            Macario Jiménez es una empresa enfocada en el diseño de moda con un estilo elegante,
                            moderno y profesional. La marca busca transmitir calidad, detalle e identidad en cada
                            una de sus colecciones.
                        </p>

                        <p>
                            Su objetivo es proyectar una imagen profesional dentro del mundo de la moda,
                            mostrando propuestas visuales que combinan elegancia, creatividad y presencia.
                        </p>

                        <p>
                            La marca toma inspiración de las tendencias internacionales y de la riqueza cultural
                            de México, logrando una identidad única que transmite exclusividad y prestigio.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="imagenes/empresa/empresa1.webp" class="img-fluid imagen-seccion" alt="Moda mexicana">
                </div>
            </div>
        </section>

        <section>
            <h2>Filosofía</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tarjeta">
                        <h3>Diseño</h3>
                        <p>Cada prenda busca comunicar una idea visual clara, elegante y profesional.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tarjeta">
                        <h3>Identidad</h3>
                        <p>La marca mantiene una esencia inspirada en la moda mexicana contemporánea.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tarjeta">
                        <h3>Calidad</h3>
                        <p>Las colecciones reflejan cuidado, detalle y una presentación visual atractiva.</p>
                    </div>
                </div>
            </div>
        </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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