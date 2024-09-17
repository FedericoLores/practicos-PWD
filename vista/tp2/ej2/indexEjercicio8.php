<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-8";
$descripcion = "Permitir calcular el valor de entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.";
include_once '../../estructura/headerEj2Tp2.php';
?>
    <form name="valorEntrada" id="valorEntrada" method="get" class="needs-validation" novalidate action="../../accion/tp2/ej2/actionEjercicio8.php">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-3 my-2">
                    <input type="number" min="0" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-md-3 my-2">
                    <select name="estudiante" id="estudiante" class="form-select" required>
                        <option value="es estudiante">Soy estudiante</option>
                        <option value="no es estudiante" selected>No soy estudiante</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <input type="submit" value="Enviar" onclick="validar('valorEntrada')" class="btn btn-primary" name="submit"/>
                </div>
            </div>
        </div>
    </form>
<?php
include_once '../../estructura/footer.php';
?>