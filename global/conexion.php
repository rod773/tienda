<?php


$servidor = "mysql:host=" . SERVIDOR . ";dbname=" . BD;


try {

    $conn = new PDO(
        $servidor,
        USUARIO,
        PASSWORD
    );

    $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET_NAMES_utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<script>alert('Conectado...')</script>";
} catch (PDOException $e) {

    echo "<script>alert('Error de Coneccion...')</script>";
}
