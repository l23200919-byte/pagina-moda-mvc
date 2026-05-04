<?php
// Página principal del sitio de moda.
// Aquí se muestra el inicio de la marca.

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macario Jiménez | Inicio</title>

    <!-- Bootstrap para diseño responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos propios -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Menú principal -->
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

    <!-- Portada principal -->
    <header class="hero-principal">
        <div class="hero-texto">
            <p class="subtitulo">Alta costura mexicana</p>
            <h1>Macario Jiménez</h1>
            <p>Elegancia, identidad y diseño contemporáneo.</p>

            <a href="coleccion.php" class="btn btn-claro">Ver colección</a>
            <a href="contacto.php" class="btn btn-outline-light">Contactar</a>
        </div>
    </header>

    <!-- Sección tipo Valentino: imagen fija + productos -->
    <section class="experiencia-moda">

        <!-- Imagen grande izquierda -->
        <div class="imagen-fija">
            <img src="imagenes/home/editorial1.jpg" alt="Imagen principal de moda">
            <div class="texto-imagen">
                <h2>Diseño con presencia</h2>
                <p>Una propuesta visual elegante y moderna.</p>
            </div>
        </div>

        <!-- Productos a la derecha -->
        <div class="productos-scroll">

            <div class="producto-scroll">
                <img src="imagenes/colecciones/summer2026/summer1.webp" alt="Producto 1">
                <h3>Vestido de colección</h3>
                <p>Diseño elegante inspirado en la alta costura mexicana.</p>
                
            </div>

            <div class="producto-scroll">
                <img src="imagenes/colecciones/fall2025/fall2.webp" alt="Producto 2">
                <h3>Prenda contemporánea</h3>
                <p>Moda actual con estilo profesional y sofisticado.</p>
                
            </div>

            <div class="producto-scroll">
                <img src="imagenes/colecciones/prefall2025/prefall3.webp" alt="Producto 3">
                <h3>Diseño exclusivo</h3>
                <p>Pieza visual con identidad, presencia y detalle.</p>
    
            </div>

            <div class="producto-scroll">
                <img src="imagenes/colecciones/runway2024/runway2.webp" alt="Producto 4">
                <h3>Look editorial</h3>
                <p>Diseño pensado para pasarela y presentación visual.</p>
                
            </div>

        </div>

    </section>

    <!-- Introducción -->
    <main class="container">
        <section>
            <h2>La moda como identidad</h2>

            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <div class="tarjeta destacada">
                        <p>
                            Macario Jiménez es una propuesta de moda enfocada en la elegancia,
                            el diseño y la identidad mexicana. La marca busca transmitir calidad,
                            detalle y presencia visual en cada colección.
                        </p>

                        <a href="empresa.php" class="btn btn-dorado">Conocer empresa</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="imagenes/home/editorial2.webp" class="img-fluid imagen-seccion" alt="Diseño de moda">
                </div>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>