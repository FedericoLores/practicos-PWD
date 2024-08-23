<?php
include_once '../../estructura/header_accionEj2.php';
include_once '../../../control/ej2/controlEjercicio1.php';
include_once '../../utils/scripts.php';

$numero = new ControlEj1();
$datos = datosRecibidos();
$resultado = $numero->tipoNumero($datos);?>
<div class="container text-center mt-3">
    <h4><?php echo $resultado ?></h4>
    <a class="btn btn-primary m-2" href="../indexEjercicio1.php">Volver a la pagina anterior</a>
</div>
<?php
include_once '../../estructura/footer.php';
?>