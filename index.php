<?php
include "global/config.php";
include "global/conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tienda</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand active" href="index.php">
            <div class="d-flex justify-content-center">
                <img src=" ./img/logo.jpg" alt="logo" id=logo width="30" height="30">
                <span>Logo</span>
            </div>
        </a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrito<span>(0)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="alert alert-success">
            <a href="" class="badge badge-success">Ver Carrito</a>
        </div>
        <div class="row">

            <?php
            $sql = "select * from tblproductos";

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $listaProductos = $stmt->fetchAll(PDO::FETCH_ASSOC);



            ?>

            <?php foreach ($listaProductos as $producto) { ?>

            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" title="titulo del producto" src="<?php echo $producto['imagen']; ?>"
                        alt="titulo">
                    <div class="card-body">
                        <span><?php echo $producto['nombre']; ?></span>
                        <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
                        <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                        <button class="btn btn-primary" type="submit" name="btnAccion" value="agregar">Agregar al
                            Carrito</button>
                    </div>
                </div>
            </div>

            <?php } ?>





        </div>

    </div>
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>