<?php
include_once '../../estructura/header_accionEj2.php';
include_once '../../../control/ej2/controlEjercicio2.php';
include_once '../../utils/scripts.php';
$cargaHoraria = new ControlEj2Tp2();
$datos = datosRecibidos();
$horas = $cargaHoraria->calcularCargaHoraria($datos);
$resultado = "";
if($horas != 0){
    $resultado = "La carga horaria total de la semana es: ".$horas;
}else{
    $resultado = "No ingreso ninguna hora en la semana";
}
?>
<div class="container text-center">
    <h4><?php echo $resultado ?></h4>
</div>
<?php
include_once '../../estructura/footer.php';
?>