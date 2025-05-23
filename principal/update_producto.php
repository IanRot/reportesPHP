<?php
include("../conexion.php"); 

$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($con, $sql);

if (!$query) {
    die("Error en la consulta: " . mysqli_error($con));
}

$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (!$row) {
    die("Producto con ID $id no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../estilos/styles.css">
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="edit_producto.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?= $row['descripcion'] ?>" required><br>

        <label>Categoría:</label>
        <input type="text" name="categoria" value="<?= $row['categoria'] ?>" required><br>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" value="<?= $row['cantidad'] ?>" required><br>

        <label>Precio Unitario:</label>
        <input type="number" name="precio_unitario" step="0.01" value="<?= $row['precio_unitario'] ?>" required><br>

        <label>ITEBIS:</label>
        <input type="number" name="itebis" step="0.01" value="<?= $row['itebis'] ?>" required><br>

        <label>Descuento:</label>
        <input type="number" name="descuento" step="0.01" value="<?= $row['descuento'] ?>" required><br>

        <label>Total General:</label>
        <input type="number" name="total_general" step="0.01" value="<?= $row['total_general'] ?>" required><br>

        <button type="submit">Actualizar Producto</button>
    </form>

    <br><button onclick="window.location.href='principal.php'">Volver a Principal</button>
</body>
</html>

