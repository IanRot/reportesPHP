<?php 
include("../conexion.php");
$con = connection();

$sql_producto = "SELECT * FROM productos"; 
$query_producto = mysqli_query($con, $sql_producto);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="../estilos/styles.css">
</head>
<body>
    
    <h2>Lista de Productos</h2>
    <button onclick="window.location.href='insertar_producto.html'">Insertar Producto</button><hr>
     
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>ITEBIS</th>
                <th>Descuento</th>
                <th>Total General</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query_producto)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio_unitario']; ?></td>
                    <td><?php echo $row['itebis']; ?></td>
                    <td><?php echo $row['descuento']; ?></td>
                    <td><?php echo $row['total_general']; ?></td>
                    <td><a href="update_producto.php?id=<?= $row["id"] ?>">Editar</a></td>
                    <td><a href="delete_producto.php?id=<?= $row["id"] ?>">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button target="_blank"  onclick="window.location.href='fpdf/PruebaV.php'">Reporte</button>
</body>
</html>
