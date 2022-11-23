<?php
if (
    empty($_POST["txtIdproducto"]) || empty($_POST["txtCantidad"])
) {
    print_r($_POST);
}
include_once 'ConexionBD.php';
$id_producto =  $_POST["txtIdproducto"];
$cantidad = $_POST["txtCantidad"];


$sentencia = $bd->prepare("CALL InsertarVenta(?,?)");
$resultado = $sentencia->execute([$id_producto, $cantidad]);

if ($resultado == TRUE) {
    $sentencia2 = $bd->prepare("CALL ActualizarStock(?,?)");
    $resultado2 = $sentencia2->execute([$id_producto, $cantidad]);
    if ($resultado2 == TRUE) {
        header('Location: ../FrontEnd/RealizarVenta.php?mensaje=registradoVenta');
    } else {
        header('Location: ../FrontEnd/RealizarVenta.php?mensaje=errorStock');
        exit();
    }
} else {
    header('Location: ../FrontEnd/RealizarVenta.php?mensaje=errorStock');
    exit();
}
