<?php
include_once '../../../control/tp1/controlEjercicio2.php';
include_once '../../../configuracion.php';
$numeroEjercicio = 2;
include_once '../../estructura/tp1/header_accion.php';

$cargaHoraria = new ControlEj2();
$datos = datosRecibidos();
$horas = $cargaHoraria->calcularCargaHoraria($datos);
if($horas != 0){
    $texto = "La carga horaria total de la semana es: ".$horas;
}else{
    $texto = "No ingreso ninguna hora en la semana";
}
?>
<div align="center">
    <p><?php echo $texto; ?></p>
</div>
<?php
include_once '../../estructura/tp1/footer.php';
?>
