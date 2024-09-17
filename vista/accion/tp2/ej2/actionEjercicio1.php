<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 1";
$descripcion = "Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script -vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.";
include_once '../../../estructura/headerAccionEj2Tp2.php';
include_once '../../../../control/tp2/ej2/controlEjercicio1.php';
include_once '../../../../configuracion.php';

$numero = new ControlEj1();
$datos = datosRecibidos();
$resultado = $numero->tipoNumero($datos);?>
<div class="container text-center mt-3">
    <h4><?php echo $resultado ?></h4>
    <a class="btn btn-primary m-2" href="../../../tp2/ej2/indexEjercicio1.php">Volver a la pagina anterior</a>
</div>
<?php
include_once '../../../estructura/footer.php';
?>