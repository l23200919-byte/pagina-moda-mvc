<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "controllers/ProductoController.php";

$controller = new ProductoController();
$productos = $controller->obtenerCatalogo();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Shop | Macario Jiménez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <li class="nav-item"><a class="nav-link" href="index.php#footer-contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

   <header class="shop-hero">
        <div class="hero-texto">
            <p class="subtitulo">Boutique</p>
            <h1>Shop</h1>
        </div>
    </header>
    <main class="container">

        <section>
            <h2>Productos disponibles</h2>

            <div class="row g-4">

                <?php foreach ($productos as $producto): ?>

                    <div class="col-md-4 col-lg-3">
                        <div class="card producto-shop">

                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top"
                                alt="<?php echo $producto['nombre']; ?>">

                            <div class="card-body">
                                <h5><?php echo $producto['nombre']; ?></h5>

                                <p><?php echo $producto['descripcion']; ?></p>

                                <p><strong>Categoría:</strong> <?php echo $producto['categoria']; ?></p>
                                <p><strong>Stock:</strong> <?php echo $producto['stock']; ?></p>

                                <p class="precio">
                                    $<?php echo number_format($producto['precio'], 2); ?>
                                </p>

                                <button class="btn btn-dorado w-100"
                                    onclick="agregarCarrito('<?php echo $producto['nombre']; ?>', <?php echo $producto['precio']; ?>)">
                                    Agregar al carrito
                                </button>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <section class="carrito-seccion">
            <h2>Carrito de compras</h2>

            <div class="carrito-box">
                <ul id="carrito" class="list-group mb-3"></ul>

                <h4>Total: $<span id="total">0.00</span></h4>

                <button class="btn btn-pagar" onclick="pagar()">
                    Pagar
                </button>
            </div>
        </section>

    </main>

    <footer>
        <p>© TecNM Campus Pachuca – Programación Web 2026</p>
    </footer>

    <script>
        let carrito = [];
        let total = 0;

        function agregarCarrito(nombre, precio) {
            carrito.push({ nombre, precio });
            total += precio;
            actualizarCarrito();
        }

        function eliminarProducto(index) {
            total -= carrito[index].precio;
            carrito.splice(index, 1);
            actualizarCarrito();
        }

        function actualizarCarrito() {
            const lista = document.getElementById("carrito");
            const totalTexto = document.getElementById("total");

            lista.innerHTML = "";

            carrito.forEach((producto, index) => {
                lista.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ${producto.nombre} - $${producto.precio.toFixed(2)}
                        <button class="btn btn-danger btn-sm" onclick="eliminarProducto(${index})">X</button>
                    </li>
                `;
            });

            totalTexto.innerText = total.toFixed(2);
        }

        function pagar() {
            if (carrito.length === 0) {
                alert("El carrito está vacío");
            } else {
                alert("Pago realizado correctamente. Total: $" + total.toFixed(2));
                carrito = [];
                total = 0;
                actualizarCarrito();
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>