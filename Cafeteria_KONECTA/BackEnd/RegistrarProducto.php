<?php
if (
     empty($_POST["txtId_producto"]) || empty($_POST["txtNombre"])
    || empty($_POST["txtReferencia"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtPeso"]) 
    || empty($_POST["txtCategoria"])  || empty($_POST["txtStock"]) ) {
    print_r($_POST);
}
include_once 'ConexionBD.php';
$id_producto=  $_POST["txtId_producto"];
$nombre = $_POST["txtNombre"];
$referencia = $_POST["txtReferencia"];
$precio = $_POST["txtPrecio"];
$peso = $_POST["txtPeso"];
$categoria = $_POST["txtCategoria"];
$stock = $_POST["txtStock"];


$sentencia = $bd->prepare("CALL InsertarProducto(?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$id_producto,$nombre,$referencia, $precio, $peso, $categoria, $stock]);

if ($resultado == TRUE) {
    header('Location: ../FrontEnd/RegistrarProducto.php?mensaje=registrado');
} else {
    header('Location: ../FrontEnd/RegistrarProducto.php?mensaje=error');
    exit();
}

?>