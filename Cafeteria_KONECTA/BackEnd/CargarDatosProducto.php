<?php
if(!isset($_GET['id'])){
    header('Location: ../FrontEnd/EditarProducto.php?mensaje=faltanDatos');
    exit();
}
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'cafeteria');
?>
 
<?php
include_once 'ConexionBD.php';

$id=$_GET['id'];

$sentencia = $bd->prepare("SELECT * FROM producto WHERE id_producto = ?;");
$sentencia->execute([$id]);
$producto=$sentencia->fetch(PDO::FETCH_OBJ);

?>