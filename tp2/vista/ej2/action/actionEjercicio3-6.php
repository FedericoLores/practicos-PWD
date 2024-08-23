<?php
include_once '../../estructura/header_accionEj2.php';
include_once '../../../control/ej2/controlEjercicio3-6.php';
include_once '../../utils/scripts.php';
$datos = datosRecibidos();
$imprimir = new ControlEj3TP2();
$texto = $imprimir->verificarEdad($datos);
?>
<div class="container text-center">
    <h4><?php echo $texto ?></h4>
    <a href='../indexEjercicio3-6.php'><input type='button' class="btn btn-primary" value='Volver al formulario'></a>
</div>

<?php
include_once '../../estructura/footer.php';
?>
