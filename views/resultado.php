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

</body>
</html>