<?php 
include "../conexion.php"; 

$con = connection();

$id = $_GET['id']; 
$sql = "DELETE FROM productos WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    
    header("Location: ../principal/principal.php");
    exit();
} else {
    echo "Error al eliminar el producto: " . mysqli_error($con);
}
?>
