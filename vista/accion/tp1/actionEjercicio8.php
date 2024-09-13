<?php
include_once '../../../control/tp1/controlEjercicio8.php';
include_once '../../../configuracion.php';
$numeroEjercicio = 8;
include_once '../../estructura/tp1/header_accion.php';

$precio = new ControlEj8();
$datos = datosRecibidos();
$valorEntrada = $precio->calcularPrecio($datos);
if($valorEntrada !=0){
    $texto = "Su entrada valdria: ".$valorEntrada;
}else{
    $texto = "No ingres&oacute; su edad, vuelva a intentarlo";
}
?>
<div align="center">
    <p><?php echo $texto; ?></p>
    <a href="../../tp1/indexEjercicio8.php"><input type="button" value="Volver a consultar"/></a>
</div>
<?php
include_once '../../estructura/tp1/footer.php';
?>