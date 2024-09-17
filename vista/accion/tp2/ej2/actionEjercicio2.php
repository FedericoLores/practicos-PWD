<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-2";
$descripcion = "Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.";
include_once '../../../estructura/headerAccionEj2Tp2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio2.php';
include_once '../../../../configuracion.php';

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
include_once '../../../estructura/footer.php';
?>