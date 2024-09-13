<?php
include_once '../../../control/tp1/controlEjercicio3-6.php';
include_once '../../../configuracion.php';
$numeroEjercicio = "3 a 6";
include_once '../../estructura/tp1/header_accion.php';

$datos = datosRecibidos();
$imprimir = new ControlEj3();
$texto = $imprimir->verificarEdad($datos)
?>
<div align="center">
    <p><?php echo $texto; ?></p>
</div>
<?php
include_once '../../estructura/tp1/footer.php';
?>