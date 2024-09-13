<?php
include_once '../../control/controlEjercicio1.php';
include_once '../utils/scripts.php';
$numeroEjercicio = 1;
include_once '../estructura/header_accion.php';

$numero = new ControlEj1();
$datos = datosRecibidos();?>
<div align="center">
    <?php echo $numero->tipoNumero($datos);?>
    </br><a href="../indexEjercicio1.php">Volver a la pagina anterior</a>
</div>
<?php
include_once '../estructura/footer.php';
?>