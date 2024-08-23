<?php
include_once '../../control/controlEjercicio3-6.php';
include_once '../utils/scripts.php';
$numeroEjercicio = "3 a 6";
include_once '../estructura/header_accion.php';

$datos = datosRecibidos();
$imprimir = new ControlEj3();
?>
<div align="center">
<?php
echo $imprimir->verificarEdad($datos);
?>
</div>
<?php
include_once '../estructura/footer.php';
?>