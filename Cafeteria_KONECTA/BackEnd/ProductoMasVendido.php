<?php
include_once  "ConexionBD.php";
$sentencia = $bd->query("select venta.id_producto,producto.nombre,producto.referencia,producto.precio,producto.peso,producto.categoria,
producto.fecha_de_creacion ,SUM(venta.cantidad) AS 'cantidad' FROM venta INNER JOIN producto 
ON venta.id_producto=producto.id_producto GROUP BY id_producto ORDER BY SUM(venta.cantidad) DESC LIMIT 1");
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
        <td><?php echo $dato->cantidad; ?></td>

    </tr>
<?php
}
?>