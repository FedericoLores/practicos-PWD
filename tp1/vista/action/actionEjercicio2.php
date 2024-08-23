<?php
include_once '../../control/controlEjercicio2.php';
include_once '../utils/scripts.php';
$numeroEjercicio = 2;
include_once '../estructura/header_accion.php';

$cargaHoraria = new ControlEj2();
$datos = datosRecibidos();
$horas = $cargaHoraria->calcularCargaHoraria($datos);
?>
<div align="center">
<?php
if($horas != 0){
    echo "La carga horaria total de la semana es: ".$horas;
}else{
    echo "No ingreso ninguna hora en la semana";
}
?>
</div>
<?php
include_once '../estructura/footer.php';
?>
