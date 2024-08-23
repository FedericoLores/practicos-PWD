<?php
include_once '../../control/controlEjercicio8.php';
include_once '../utils/scripts.php';
$numeroEjercicio = 8;
include_once '../estructura/header_accion.php';

$precio = new ControlEj8();
$datos = datosRecibidos();
$valorEntrada = $precio->calcularPrecio($datos);
?>
<div align="center">
<?php
if($valorEntrada !=0){
    echo "Su entrada valdria: ".$valorEntrada;
}else{
    echo "No ingres&oacute; su edad, vuelva a intentarlo";
}
?>
</br><a href="../indexEjercicio8.php"><input type="button" value="Volver a consultar"/></a>
</div>
<?php
include_once '../estructura/footer.php';
?>