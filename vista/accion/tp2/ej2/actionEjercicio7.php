<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-7";
$descripcion = "Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.";
include_once '../../../estructura/headerAccionEj2Tp2.php';
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