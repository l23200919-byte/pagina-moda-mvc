<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "controllers/ContactoController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ContactoController();
    $controller->procesarFormulario();
    exit;
}

$colecciones = [
    [
        "id" => "spring2026",
        "nombre" => "Spring Summer 2026",
        "carpeta" => "summer2026",
        "prefijo" => "summer",
        "cantidad" => 13,
        "clase" => "galeria-summer"
    ],
    [
        "id" => "resort2026",
        "nombre" => "Resort 2026",
        "carpeta" => "resort2026",
        "prefijo" => "resort",
        "cantidad" => 8,
        "clase" => "galeria-resort"
    ],
    [
        "id" => "fall2025",
        "nombre" => "Fall 2025",
        "carpeta" => "fall2025",
        "prefijo" => "fall",
        "cantidad" => 12,
        "clase" => "galeria-fall"
    ],
    [
        "id" => "prefall2025",
        "nombre" => "Prefall 2025",
        "carpeta" => "prefall2025",
        "prefijo" => "prefall",
        "cantidad" => 9,
        "clase" => "galeria-prefall"
    ],
    [
        "id" => "runway2024",
        "nombre" => "Runway 2024",
        "carpeta" => "runway2024",
        "prefijo" => "runway",
        "cantidad" => 14,
        "clase" => "galeria-runway"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colección | Macario Jiménez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css?v=30">
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
                    <li class="nav-item"><a class="nav-link" href="index.php#footer-contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="coleccion-hero">
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

            <div class="lista-botones-coleccion">
                <?php foreach ($colecciones as $coleccion): ?>
                    <button class="btn-coleccion"
                        data-bs-toggle="collapse"
                        data-bs-target="#<?php echo $coleccion["id"]; ?>">
                        <?php echo strtoupper($coleccion["nombre"]); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <?php foreach ($colecciones as $index => $coleccion): ?>

                <div class="collapse coleccion-item <?php echo $index == 0 ? 'show' : ''; ?>"
                    id="<?php echo $coleccion["id"]; ?>">

                    <h3 class="titulo-galeria">
                        <?php echo $coleccion["nombre"]; ?>
                    </h3>

                    <div class="galeria-coleccion <?php echo $coleccion["clase"]; ?>">

                        <?php for ($i = 1; $i <= $coleccion["cantidad"]; $i++): ?>

                            <div class="marco-look">
                                <img
                                    src="imagenes/colecciones/<?php echo $coleccion["carpeta"]; ?>/<?php echo $coleccion["prefijo"] . $i; ?>.webp"
                                    alt="<?php echo $coleccion["nombre"]; ?> look <?php echo $i; ?>">

                                <p class="numero-look">
                                    Look <?php echo $i; ?>
                                </p>
                            </div>

                        <?php endfor; ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </section>

    </main>

    <footer class="footer-moda" id="footer-contacto">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <h5>Ubicación</h5>

                    <iframe
                        src="https://www.google.com/maps?q=Monte%20L%C3%ADbano%20250,%20Lomas%20de%20Chapultepec,%20Ciudad%20de%20M%C3%A9xico&z=15&output=embed"
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

</body>
</html>