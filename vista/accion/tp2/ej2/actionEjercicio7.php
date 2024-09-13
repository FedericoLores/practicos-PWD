<?php
include_once '../../../estructura/tp2/header_accionEj2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio7.php';
include_once '../../../../configuracion.php';


$datos = datosRecibidos();
$operacion = new ControlEj7TP2();

$resultado = $operacion->operarNumeros($datos);

?>
<div class="container text-center">
    <h5><?php echo "El resultado de la ".$datos['operacion']." es: ".$resultado; ?></h5>
    <a class="btn btn-primary" href='../../../tp2/ej2/indexEjercicio7.php'>Hacer otra operacion</a>
</div>

<?php
include_once '../../../estructura/footer.php';
?>