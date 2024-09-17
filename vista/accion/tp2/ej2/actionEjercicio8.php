<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-8";
$descripcion = "Permitir calcular el valor de entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.";
include_once '../../../estructura/headerAccionEj2Tp2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio8.php';
include_once '../../../../configuracion.php';

$precio = new ControlEj8TP2();
$datos = datosRecibidos();

$resultado = $precio->calcularPrecio($datos);
?>
<div class="container text-center ">
    <h4>Su entrada valdria: $<?php echo $resultado; ?></h4>
    <a href="../../../tp2/ej2/indexEjercicio8.php"></br><input type="button" class="btn btn-primary" value="Volver a consultar"/></a>
</div>


<?php include_once '../../../estructura/footer.php';?>