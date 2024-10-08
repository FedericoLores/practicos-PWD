<?php
$titulo = "Trabajo práctico 2";
$ejercicio = "Ejercicio 2-7";
$descripcion = "Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.";
include_once '../../estructura/headerEj2Tp2.php';
?>
    <form name="calcular" id="calcular" method="get" class="needs-validation" novalidate action="../../accion/tp2/ej2/actionEjercicio7.php">
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4 mt-3">
                    <input type="number" id="num1" name="num1" class="form-control" required placeholder="Ingrese un n&uacute;mero"/></br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-md-4">
                    <input type="number" id="num2" name="num2" class="form-control" required placeholder="Ingrese otro n&uacute;mero"/></br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-md-3 d-flex justify-content-center">
                    <select name="operacion" id="operacion" class="form-select d-flex justify-content-center" required>
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                    </select>
                    <input type="submit" value="Enviar" onclick="validar('calcular')" class="btn btn-primary d-flex justify-content-center" name="submit"/>
                </div>
            </div>
            
        </div>
        
        
    </form>
<?php
include_once '../../estructura/footer.php';
?>