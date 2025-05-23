<?php

function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "BD_FacturacionPruebas";

    $con = mysqli_connect($host, $user, $pass, $db);

    if (!$con) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $con;
}
?>

