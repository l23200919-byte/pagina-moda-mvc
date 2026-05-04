<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Macario Jiménez</title>

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
            <p class="subtitulo">Solicita información</p>
            <h1>Contacto</h1>
        </div>
    </header>

    <main class="container">

        <section class="seccion-formulario">
            <h2>Formulario de contacto</h2>

            <p class="texto-centro">
                Llena el formulario para solicitar información sobre colecciones,
                diseños o contacto con la marca.
            </p>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">

                    <div class="tarjeta-formulario">

                        <!-- Muestra error si no cumple la validación -->
                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>

                        <!-- Formulario con método POST -->
                        <form method="POST" action="contacto.php">

                            <div class="mb-3">
                                <label class="form-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico:</label>
                                <input type="email" name="correo" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Teléfono:</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mensaje:</label>
                                <textarea name="mensaje" class="form-control" rows="5" required></textarea>
                                <small>El mensaje debe tener mínimo 10 caracteres.</small>
                            </div>

                            <button type="submit" class="btn btn-dorado w-100">
                                Enviar mensaje
                            </button>

                        </form>

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