<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/estilos.css">
    <title>Home - Sucursal</title>
</head>

<body>

    <head>
        <h1 class="texto-principal">Tienda <span>Herramientas</span></h1>
    </head>

    <div class="contenedor-navegacion">
        <nav class="principal-navegacion contenedor">
            <a href="homeCliente.php">Home</a>
            <a href="galeriaCliente.php">Galeria</a>

            <div class="row">
                <div class="contenedor-carrito">
                    <ul>
                        <li class="submenu">
                            <img src="assets/carrito.png" alt="Carrito">
                            <div id="carrito">
                                <table id="lista-carrito" class="separacion u-full-width" border="1">
                                    <thead>
                                        <tr>
                                            <th> Imagen </th>
                                            <th> Nombre </th>
                                            <th> Precio </th>
                                            <th> Cantidad </th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tr>
                                        <th>Total:</th>
                                        <th class="ubicacion" border="0"></th>
                                    </tr>
                                    <div id="total-carrito"></div>
                                </table>
                                <button id="vaciar-carrito" class="btnCarrito">Vaciar Carrito</button>
                            </div>
                        </li>
                    </ul>
                </div> <!-- Fin contenedor Carrito-->
            </div>

        </nav>
    </div>

    <div class="hero"></div> <!-- Banner Principal-->

    <!-- Seccion de Categorias -->

    <section class="contenedor categorias">
        <h2>Categoria Productos</h2>
        <div class="listado-categorias">

            <div class="categoria">
                <img src="assets/categoria1.jpg" alt="categoria1">
                <a href="#">Hogar</a>
            </div>

            <div class="categoria">
                <img src="assets/categoria2.jpg" alt="categoria1">
                <a href="#">Industriales</a>
            </div>

            <div class="categoria">
                <img src="assets/categoria3.jpg" alt="categoria1">
                <a href="#">Automotriz</a>
            </div>
        </div>

    </section>

    <main class="contenedor contenido-principal" id="lista-cursos">
        <h2 class="texto-centrado"> Nuestros Productos</h2>

        <div class="contenedor-productos">

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta8.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Kit Herramientas 2</h4>
                    <p>Marca: Pretul</p>
                    <p class="precio">Precio: <span>$22</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="1">Agregar Al Carrito</a>
                </div>
            </div>

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta2.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Llaves Inglesas</h4>
                    <p>Marca: Dwalt</p>
                    <p class="precio">Precio: <span>$10</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="2">Agregar Al Carrito</a>
                </div>
            </div>

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta3.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Destornilladores</h4>
                    <p>Marca: Truper</p>
                    <p class="precio">Precio: <span>$11</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="3">Agregar Al Carrito</a>
                </div>
            </div>

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta4.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Taladro</h4>
                    <p>Marca: Truper</p>
                    <p class="precio">Precio: <span>$18</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="4">Agregar Al Carrito</a>
                </div>
            </div>

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta5.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Kit de Herramientas</h4>
                    <p>Marca: Bagon</p>
                    <p class="precio">Precio: <span>$19</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="5">Agregar Al Carrito</a>
                </div>
            </div>

            <div class="producto">
                <!-- Contenedor de Producto o Card-->
                <img src="assets/herramienta7.jpg" alt="Herramienta">
                <div class="texto-producto texto-centrado">
                    <h4>Martillo</h4>
                    <p>Marca: Stanley</p>
                    <p class="precio">Precio: <span>$6</span></p>
                    <a href="#" class="btn agregar-carrito" data-id="6">Agregar Al Carrito</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footerX contenedor">

            <div class="foot">
                <h3>Contacto</h3>
                <nav>
                    <a href="#">Correo</a>
                    <a href="#">Facebook</a>
                    <a href="#">Telefono</a>
                </nav>
            </div>

            <div class="foot">
                <h3>Distribuidores</h3>
                <nav>
                    <a href="https://www.truper.com/" target="blank">Truper</a>
                    <a href="https://mx.dewalt.global/" target="blank">Dwalt</a>
                    <a href="https://continenteferretero.com/brand/pretul" target="blank">Pretul</a>
                </nav>
            </div>
        </div>
        <p class="texto-centrado">Todos Los Derechos Reserbados ElianLv@</p>
    </footer>

    <script src="JS/carrito.js"></script>
</body>

</html>