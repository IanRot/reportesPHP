<?php
include "../conexion.php";
$con = connection();

// Capturamos los datos del formulario
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$precio_unitario = $_POST['precio_unitario'];
$itebis = $_POST['itebis'];
$descuento = $_POST['descuento'];

// Calculamos el total general
$total_general = ($cantidad * $precio_unitario) + $itebis - $descuento;

// Insertamos el producto
$sql = "INSERT INTO productos (descripcion, categoria, cantidad, precio_unitario, itebis, descuento, total_general) 
        VALUES ('$descripcion', '$categoria', '$cantidad', '$precio_unitario', '$itebis', '$descuento', '$total_general')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: principal.php");
    exit();
} else {
    echo "Error al insertar el producto: " . mysqli_error($con);
}
?>
