<?php
include_once '../../../estructura/tp2/header_accionEj2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio1.php';
include_once '../../../../configuracion.php';

$numero = new ControlEj1();
$datos = datosRecibidos();
$resultado = $numero->tipoNumero($datos);?>
<div class="container text-center mt-3">
    <h4><?php echo $resultado ?></h4>
    <a class="btn btn-primary m-2" href="../../../tp2/ej2/indexEjercicio1.php">Volver a la pagina anterior</a>
</div>
<?php
include_once '../../../estructura/footer.php';
?>