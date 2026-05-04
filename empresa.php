<?php
// Página de información de la empresa.

error_reporting(E_ALL);
ini_set('display_errors', 1);
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
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
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

    <footer class="footer-moda">

    <div class="container">

        <div class="row">

            <!-- MAPA -->
            <div class="col-md-6">
                <h5>Ubicación</h5>

                <iframe 
                    src="https://www.google.com/maps?q=19.418204,-99.214638&z=15&hl=es&output=embed&marker=19.418204,-99.214638"
                    width="100%" height="250"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
                 <!-- DIRECCIÓN -->
                <p class="direccion">
                    Dirección: Monte Líbano 250, Lomas de Chapultepec, Miguel Hidalgo,  
                    11000 Ciudad de México, CDMX
                </p>
            </div>

            <!-- CONTACTO / REDES -->
            <div class="col-md-6 text-center">

                <h5>Contáctanos</h5>

                <p>Moda de alta costura mexicana</p>

                <div class="redes">

                    <!-- INSTAGRAM -->
                    <a href="https://www.instagram.com/macariojimenez/" target="_blank">
                        <img src="imagenes/iconos/instagram.png" alt="Instagram">
                    </a>

                    <!-- FACEBOOK -->
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

</body>
</html>