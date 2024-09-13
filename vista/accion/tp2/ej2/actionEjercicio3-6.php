<?php
include_once '../../../estructura/tp2/header_accionEj2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio3-6.php';
include_once '../../../../configuracion.php';

$datos = datosRecibidos();
$imprimir = new ControlEj3TP2();
$texto = $imprimir->verificarEdad($datos);
?>
<div class="container text-center">
    <h4><?php echo $texto ?></h4>
    <a href='../../../tp2/ej2/indexEjercicio3-6.php'><input type='button' class="btn btn-primary" value='Volver al formulario'></a>
</div>

<?php
include_once '../../../estructura/footer.php';
?>
