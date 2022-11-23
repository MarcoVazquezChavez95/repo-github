<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/styleNav.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</head>

<body>
    <div class="contariner ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Menu cafeteria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Producto
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="RegistrarProducto.php">Registrar</a></li>
                                <li><a class="dropdown-item" href="EditarProducto.php">Editar </a></li>
                                <li><a class="dropdown-item" href="EliminarProducto.php">Eliminar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Consultas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ProductoMasVendido.php">Producto Mas Vendido</a></li>
                                <li><a class="dropdown-item" href="ProductoConMasStock.php">Producto con mas stock </a></li>
                                <li><a class="dropdown-item" href="Producto.php">Productos </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="RealizarVenta.php">Realizar Venta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- FIN DEL ENCAVEZADO -->


    <?php include '/wamp64/www/Cafeteria_KONECTA/BackEnd/Alertas.php' ?>


    <form class="p-4" method="POST" action="../BackEnd/RegistrarProducto.php">
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Id producto</label>
            <input type="text" class="form-control" class="form-control" name="txtId_producto" autofocus placeholder="Ingrese el id del producto">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Nombre Producto</label>
            <input type="text" class="form-control" class="form-control" name="txtNombre" autofocus placeholder="Ingrese el nombre del producto">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Referencia</label>
            <input type="text" class="form-control" class="form-control" name="txtReferencia" autofocus placeholder="Ingrese la referencia">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" class="form-control" name="txtPrecio" autofocus placeholder="Ingrese el precio">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Peso</label>
            <input type="text" class="form-control" class="form-control" name="txtPeso" autofocus placeholder="Ingrese el peso">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">categoria</label>
            <input type="text" class="form-control" class="form-control" name="txtCategoria" autofocus placeholder="Ingrese la categoria">

        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" class="form-control" class="form-control" name="txtStock" autofocus placeholder="Ingrese el numero de piezas">
        </div>
        <div class="form-group mb-3">

        </div>
        <div class="mb-3 d-grid gap-3">
            <button type="submit" class="btn btn-primary">Registrar producto</button>
        </div>
    </form>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>