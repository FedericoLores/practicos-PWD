<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-3 a 6";
$descripcion = "Crear una página php que contenga un formulario HTML, enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido y vivo en dirección”, usando la información recibida. Se muestran mensajes distintos dependiendo si la
persona es mayor de edad o no. Se ingresa el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo. Permite seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la CANTIDAD de deportes que practica";
include_once '../../../estructura/headerAccionEj2Tp2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio3-6.php';
include_once '../../../../configuracion.php';

$datos = datosRecibidos();
$imprimir = new ControlEj3TP2();
$texto = $imprimir->verificarEdad($datos);
?>
<div class="container text-center">
    <h4><?php echo $texto ?></h4>
    <a href='../../../tp2/ej2/indexEjercicio3-6.php'><input type='button' class="btn btn-primary" value='Volver al formulario'></a>
</div>

<?php
include_once '../../../estructura/footer.php';
?>
