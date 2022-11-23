<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'faltanDatos') {


?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error al registrar faltan datos</strong> Revisar que los campos esten llenos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php


}
?>
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {


?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Eliminado correctamente</strong> Eliminado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php


}
?>

<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {


?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se registro correctamente</strong> Producto Registrado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php


}
?>

<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {


?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error vuelva a intentar</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php


}
?>
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'modificado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han modificados los campos correctamente</strong> Campos guardados
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'errorStock') {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error stock no disponible</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registradoVenta') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se registro correctamente la venta</strong> Campos guardados
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>