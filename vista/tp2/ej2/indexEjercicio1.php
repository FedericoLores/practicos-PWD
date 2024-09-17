<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-1";
$descripcion = "Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script -vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.";
include_once ('../../estructura/headerEj2Tp2.php');

?>
    <div class="container">
        <form name="enviarNumero" id="enviarNumero" class="needs-validation" novalidate method="post" action="../../accion/tp2/ej2/actionEjercicio1.php">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <label for="num" class="form-label">Ingrese un n&uacute;mero:</label>
                    <input type="number" class="form-control" id="num" name="num" required/>
                    <div class="invalid-feedback">Por favor ingrese un n&uacute;mero</div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" name="submit" onclick="validar('enviarNumero')" class="btn btn-primary m-3 col-md-1" value="Enviar">
            </div>
            
        </form>
    </div>

<?php
include_once '../../estructura/footer.php';
?>