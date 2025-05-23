<?php
include("../conexion.php");
$con = connection();

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$cantidad = intval($_POST['cantidad']);
$precio_unitario = floatval($_POST['precio_unitario']);
$itebis = floatval($_POST['itebis']);
$descuento = floatval($_POST['descuento']);


$total_general = ($cantidad * $precio_unitario) + $itebis - $descuento;

$sql = "UPDATE productos SET 
            descripcion='$descripcion',
            categoria='$categoria',
            cantidad=$cantidad,
            precio_unitario=$precio_unitario,
            itebis=$itebis,
            descuento=$descuento,
            total_general=$total_general
        WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../principal/principal.php");
    exit();
} else {
    echo "❌ Error al actualizar el producto: " . mysqli_error($con);
}
?>