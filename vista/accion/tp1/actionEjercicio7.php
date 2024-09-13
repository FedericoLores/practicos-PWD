<?php
include_once '../../../control/tp1/controlEjercicio7.php';
include_once '../../../configuracion.php';
$numeroEjercicio = 7;
include_once '../../estructura/tp1/header_accion.php';

$datos = datosRecibidos();
$operacion = new ControlEj7();
$resultado = $operacion->operarNumeros($datos);
if($resultado != 0){
    $texto = "El resultado de la ".$datos['operacion']." es: ".$resultado;
}else{
    $texto = "Falto ingresar 1 o m&aacute;s datos (o hay numeros opuestos, ups)";
}
?>
<div align="center">
    <p><?php echo $texto; ?></p>
    <a href='../../tp1/indexEjercicio7.php'>Hacer otra operacion</a>
</div>
<?php
include_once '../../estructura/tp1/footer.php';
?>