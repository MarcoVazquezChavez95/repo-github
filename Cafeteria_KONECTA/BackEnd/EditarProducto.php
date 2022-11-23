<?php
if (
    empty($_POST["txtIdproducto"]) || empty($_POST["txtNombre"])
    || empty($_POST["txtReferencia"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtPeso"])
    || empty($_POST["txtCategoria"])  || empty($_POST["txtStock"])

) {
    print_r($_POST);
    print_r("Error faltan datos");
} else {
    include_once 'ConexionBD.php';
    print_r($_POST);

    $id_producto = $_POST["txtIdproducto"];
    $nombre = $_POST["txtNombre"];
    $referencia = $_POST["txtReferencia"];
    $precio = $_POST["txtPrecio"];
    $peso = $_POST["txtPeso"];
    $categoria = $_POST["txtCategoria"];
    $stock = $_POST["txtStock"];

    $sentencia = $bd->prepare("CALL ActualizarProducto(?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$id_producto, $nombre, $referencia, $precio, $peso, $categoria, $stock]);
    if ($resultado == TRUE) {
        header('Location: ../FrontEnd/EditarProducto.php?mensaje=modificado');
    } else {

        header('Location: ../FrontEnd/EditarProducto.php?mensaje=error');
        exit;
    }
}
