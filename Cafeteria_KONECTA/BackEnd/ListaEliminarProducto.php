<?php
include_once  "ConexionBD.php";
$sentencia = $bd->query("select * from producto ");
$producto = $sentencia->fetchall(PDO::FETCH_OBJ);
?>
<?php
foreach ($producto as $dato) {
?>
    <tr>
        <td scope="row"><?php echo $dato->id_producto; ?></td>
        <td><?php echo $dato->nombre; ?></td>
        <td><?php echo $dato->referencia; ?>
        <td><?php echo $dato->precio; ?></td>
        <td><?php echo $dato->peso; ?></td>
        <td><?php echo $dato->categoria; ?></td>
        <td><?php echo $dato->fecha_de_creacion; ?></td>
        <td><?php echo $dato->stock; ?></td>
        <td><a href="../BackEnd/EliminarProducto.php?id=<?php echo $dato->id_producto; ?>" class="text-danger"><i class="bi bi-trash-fill"></i></a></td>
    </tr>
<?php
}
?>