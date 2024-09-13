<?php
include_once '../../../control/tp1/controlEjercicio1.php';
include_once '../../../configuracion.php';
$numeroEjercicio = 1;
include_once '../../estructura/tp1/header_accion.php';

$numero = new ControlEj1();
$datos = datosRecibidos();?>
<div align="center">
    <?php echo $numero->tipoNumero($datos);?>
    </br><a href="../../tp1/indexEjercicio1.php">Volver a la pagina anterior</a>
</div>
<?php
include_once '../../estructura/tp1/footer.php';
?>