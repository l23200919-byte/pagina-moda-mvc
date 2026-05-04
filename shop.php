<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Macario Jiménez</title>

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

    <header class="hero-coleccion-mini">
        <div class="hero-texto">
            <p class="subtitulo">Boutique</p>
            <h1>Shop</h1>
        </div>
    </header>

    <main class="container">

        <section>
            <h2>Prendas destacadas</h2>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card producto-shop">
                       <img src="imagenes/shop/magnolia1.webp" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5>Magnolia</h5>
                            <p>$3,800.00</p>
                            <a href="contacto.php" class="btn btn-dorado w-100">Solicitar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card producto-shop">
                        <img src="imagenes/shop/magnolia2.webp" class="card-img-top" alt="Producto 2">
                        <div class="card-body">
                            <h5>Magnolia</h5>
                            <p>$3,800.00</p>
                            <a href="contacto.php" class="btn btn-dorado w-100">Solicitar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card producto-shop">
                        <img src="imagenes/shop/magnolia3.webp" class="card-img-top" alt="Producto 3">
                        <div class="card-body">
                            <h5>Magnolia</h5>
                            <p>$3,800.00</p>
                            <a href="contacto.php" class="btn btn-dorado w-100">Solicitar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card producto-shop">
                        <img src="imagenes/shop/magnolia4.webp" class="card-img-top" alt="Producto 4">
                        <div class="card-body">
                            <h5>Magnolia</h5>
                            <p>$3,800.00</p>
                            <a href="contacto.php" class="btn btn-dorado w-100">Solicitar</a>
                        </div>
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