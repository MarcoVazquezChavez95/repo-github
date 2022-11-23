<?php
$mysqli = new mysqli('localhost', 'root', '', 'cafeteria');
?>
<?php
// Realizamos la consulta para extraer los datos
$query = $mysqli->query("SELECT * FROM producto");
while ($valores = mysqli_fetch_array($query)) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
    echo '<option value="' . $valores['id_producto'] . '">' . $valores['id_producto'] . '</option>';
}
?>