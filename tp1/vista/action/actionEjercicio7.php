<?php
include_once '../../control/controlEjercicio7.php';
include_once '../utils/scripts.php';
$numeroEjercicio = 7;
include_once '../estructura/header_accion.php';

$datos = datosRecibidos();
$operacion = new ControlEj7();
$resultado = $operacion->operarNumeros($datos);
?>
<div align="center">
<?php
if($resultado != 0){
    echo "El resultado de la ".$datos['operacion']." es: ".$resultado;
}else{
    echo "Falto ingresar 1 o m&aacute;s datos (o hay numeros opuestos, ups)";
}
?>
</br><a href='../indexEjercicio7.php'>Hacer otra operacion</a>
</div>
<?php
include_once '../estructura/footer.php';
?>