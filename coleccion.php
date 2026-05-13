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
    <title>Colección | Macario Jiménez</title>

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

    <!-- Encabezado pequeño -->
    <header class="hero-coleccion-mini">
        <div class="hero-texto">
            <p class="subtitulo">Lookbook</p>
            <h1>Colección</h1>
        </div>
    </header>

    <main class="container">

        <section class="colecciones-panel">
            <h2>Lookbook</h2>

            <p class="texto-centro">
                Selecciona una colección para ver las imágenes correspondientes.
            </p>

            <!-- Lista de colecciones -->
            <div class="lista-botones-coleccion">

                <button class="btn-coleccion" data-bs-toggle="collapse" data-bs-target="#spring2026">
                    SPRING SUMMER 2026
                </button>

                <button class="btn-coleccion" data-bs-toggle="collapse" data-bs-target="#resort2026">
                    RESORT 2026
                </button>

                <button class="btn-coleccion" data-bs-toggle="collapse" data-bs-target="#fall2025">
                    FALL 2025
                </button>

                <button class="btn-coleccion" data-bs-toggle="collapse" data-bs-target="#prefall2025">
                    PREFALL 2025
                </button>

                <button class="btn-coleccion" data-bs-toggle="collapse" data-bs-target="#runway2024">
                    RUNWAY 2024
                </button>

            </div>

            <!-- Colección 1 -->
            <div class="collapse show coleccion-item" id="spring2026">
                <h3 class="titulo-galeria">Spring Summer 2026</h3>

                <div class="galeria-coleccion">
                    <img src="imagenes/colecciones/summer2026/summer1.webp" alt="Look 1">
                    <img src="imagenes/colecciones/summer2026/summer2.webp" alt="Look 2">
                    <img src="imagenes/colecciones/summer2026/summer3.webp" alt="Look 3">
                    <img src="imagenes/colecciones/summer2026/summer4.webp" alt="Look 4">
                </div>
            </div>

            <!-- Colección 2 -->
            <div class="collapse coleccion-item" id="resort2026">
                <h3 class="titulo-galeria">Resort 2026</h3>

                <div class="galeria-coleccion">
                    <img src="imagenes/colecciones/resort2026/resort1.webp" alt="Look 1">
                    <img src="imagenes/colecciones/resort2026/resort2.webp" alt="Look 2">
                    <img src="imagenes/colecciones/resort2026/resort3.webp" alt="Look 3">
                    <img src="imagenes/colecciones/resort2026/resort4.webp" alt="Look 4">
                </div>
            </div>

            <!-- Colección 3 -->
            <div class="collapse coleccion-item" id="fall2025">
                <h3 class="titulo-galeria">Fall 2025</h3>

                <div class="galeria-coleccion">
                    <img src="imagenes/colecciones/fall2025/fall1.webp" alt="Look 1">
                    <img src="imagenes/colecciones/fall2025/fall2.webp" alt="Look 2">
                    <img src="imagenes/colecciones/fall2025/fall3.webp" alt="Look 3">
                    <img src="imagenes/colecciones/fall2025/fall4.webp" alt="Look 4">
                </div>
            </div>

            <!-- Colección 4 -->
            <div class="collapse coleccion-item" id="prefall2025">
                <h3 class="titulo-galeria">Prefall 2025</h3>

                <div class="galeria-coleccion">
                    <img src="imagenes/colecciones/prefall2025/prefall1.webp" alt="Look 1">
                    <img src="imagenes/colecciones/prefall2025/prefall2.webp" alt="Look 2">
                    <img src="imagenes/colecciones/prefall2025/prefall3.webp" alt="Look 3">
                    <img src="imagenes/colecciones/prefall2025/prefall4.webp" alt="Look 4">
                </div>
            </div>

            <!-- Colección 5 -->
            <div class="collapse coleccion-item" id="runway2024">
                <h3 class="titulo-galeria">Runway 2024</h3>

                <div class="galeria-coleccion">
                    <img src="imagenes/colecciones/runway2024/runway1.webp" alt="Look 1">
                    <img src="imagenes/colecciones/runway2024/runway2.webp" alt="Look 2">
                    <img src="imagenes/colecciones/runway2024/runway3.webp" alt="Look 3">
                    <img src="imagenes/colecciones/runway2024/runway4.webp" alt="Look 4">
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

    <script>
        // Cuando se presiona un botón de colección, se cierran las demás colecciones.
        const botonesColeccion = document.querySelectorAll(".btn-coleccion");

        botonesColeccion.forEach(boton => {
            boton.addEventListener("click", function () {
                const objetivo = this.getAttribute("data-bs-target");

                document.querySelectorAll(".coleccion-item").forEach(coleccion => {
                    if ("#" + coleccion.id !== objetivo) {
                        const instancia = bootstrap.Collapse.getOrCreateInstance(coleccion);
                        instancia.hide();
                    }
                });
            });
        });
    </script>
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