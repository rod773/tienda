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
    <nav class="nav">
        <div class="navbar-brand d-flex justify-content-center">
            <img src="./img/logo.jpg" alt="logo" id=logo>
            <span>Logo</span>
        </div>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Carrito</a>
    </nav>
    <div class="container">
        <div class="alert alert-success">
            <a href="" class="badge badge-success">Ver Carrito</a>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" title="titulo del producto" src="./img/titulo.jpg" alt="titulo">
                    <div class="card-body">
                        <span>Titulo del producto</span>
                        <h5 class="card-title">€300.00</h5>
                        <p class="card-text">Descripción</p>
                        <button class="btn btn-primary" type="submit" name="btnAccion" value="agregar">Agregar al
                            Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>