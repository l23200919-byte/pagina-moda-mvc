<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasarela | Macario Jiménez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
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
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-secundario">
        <div class="hero-texto">
            <p class="subtitulo">Galería visual</p>
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