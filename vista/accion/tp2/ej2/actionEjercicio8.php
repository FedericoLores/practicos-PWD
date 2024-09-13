<?php
include_once '../../../estructura/tp2/header_accionEj2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio8.php';
include_once '../../../../configuracion.php';

$precio = new ControlEj8TP2();
$datos = datosRecibidos();

$resultado = $precio->calcularPrecio($datos);
?>
<div class="container text-center ">
    <h4>Su entrada valdria: $<?php echo $resultado; ?></h4>
    <a href="../../../tp2/ej2/indexEjercicio8.php"></br><input type="button" class="btn btn-primary" value="Volver a consultar"/></a>
</div>


<?php include_once '../../../estructura/footer.php';?>