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
    <title>Pasarela | Macario Jiménez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css?v=10">
</head>

<body>

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

    <header class="pasarela-hero">
    <div class="hero-texto">
        <p class="subtitulo">Runway</p>
        <h1>Pasarela</h1>
    </div>
</header>

    <main class="container">
        <section>
            <h2>Pasarela visual</h2>

            <p class="texto-centro">
                Esta sección muestra una galería de moda con imágenes representativas
                de la marca y sus colecciones.
            </p>

            <div id="carruselPasarela" class="carousel slide carrusel pasarela-carrusel" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#carruselPasarela" data-bs-slide-to="5"></button>
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="imagenes/colecciones/runway2024/runway1.webp" class="d-block w-100" alt="Runway 1">
                    </div>

                    <div class="carousel-item">
                        <img src="imagenes/colecciones/runway2024/runway2.webp" class="d-block w-100" alt="Runway 2">
                    </div>

                    <div class="carousel-item">
                        <img src="imagenes/colecciones/runway2024/runway3.webp" class="d-block w-100" alt="Runway 3">
                    </div>

                    <div class="carousel-item">
                        <img src="imagenes/colecciones/resort2026/resort1.webp" class="d-block w-100" alt="Resort 1">
                    </div>

                    <div class="carousel-item">
                        <img src="imagenes/colecciones/resort2026/resort2.webp" class="d-block w-100" alt="Resort 2">
                    </div>

                    <div class="carousel-item">
                        <img src="imagenes/colecciones/runway2024/runway4.webp" class="d-block w-100" alt="Runway 4">
                    </div>

                </div>

                <button class="carousel-control-prev boton-carrusel" type="button" data-bs-target="#carruselPasarela" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon icono-carrusel"></span>
                </button>

                <button class="carousel-control-next boton-carrusel" type="button" data-bs-target="#carruselPasarela" data-bs-slide="next">
                    <span class="carousel-control-next-icon icono-carrusel"></span>
                </button>

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