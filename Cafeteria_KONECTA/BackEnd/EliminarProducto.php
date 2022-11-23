<?php 
include_once 'ConexionBD.php';
$id_producto=$_GET['id'];
$sentencia = $bd->prepare("CALL EliminarProducto(?)");
$resultado = $sentencia->execute([$id_producto]);

if ($resultado == TRUE) {
    header('Location: ../FrontEnd/EliminarProducto.php?mensaje=eliminado');
} else {
    header('Location: ../FrontEnd/EditarProducto.php?mensaje=error');
    exit();
}
?>