<?php
include_once '../../estructura/tp2/headerEj2.php';
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