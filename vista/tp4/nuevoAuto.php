<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio 7 (nuevo auto)";
$descripcion = "Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
“accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
control antes generada, no se puede acceder directamente a las clases del ORM.";
include_once ('../estructura/header.php');
include_once('../../configuracion.php');
?>
<div class="card m-3">
<div class="card-header text-center mt-3">
<h4>Nuevo Auto</h4>
</div>
<div class="card-body">
<form method="post" action="../accion/tp4/accionNuevoAuto.php" id="nuevoAuto" name="nuevoAuto" class="needs-validation" novalidate>
	<div class="container">
        <div class="col">
            <label for="Patente" class="form-label">Patente</label>
            <input id="Patente" name ="Patente" type="text" class="form-control" pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9]+([ \-]?[A-Za-zÁÉÍÓÚáéíóúÑñ0-9]+)*$" minlength="4" maxlength="9" placeholder="AA 123 ZZ" required/>
            <div class="invalid-feedback">Ingrese una patente de valida de 4-9 caracteres</div>
        </div>
        <div class="col">
            <label for="Marca" class="form-label mt-2">Marca</label>
            <input id="Marca" name ="Marca" type="text" class="form-control" minlength="3" maxlength="50" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s\-]+$" placeholder="Marca" required/>
            <div class="invalid-feedback">Ingrese una marca valida</div>
        </div>
        <div class="col">
            <label for="Modelo" class="form-label mt-2">Modelo</label>
            <input id="Modelo" name ="Modelo" type="number" class="form-control" min="0" max="99999" placeholder="0" required/>
            <div class="invalid-feedback">Ingrese un modelo valido</div>
        </div>
        <div class="col">
            <label for="NroDni" class="form-label mt-2">Dni del propietario</label>
            <input id="NroDni" name ="NroDni" type="number" class="form-control" min="10000000" max="99999999" placeholder="00000000" required/>
            <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
        </div>
        <input id="accion" name ="accion" value="nuevo" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a class="btn btn-secondary" href="verAutos.php">Volver</a>
                <input type="submit" name="submit" class="btn btn-primary mx-2" onclick="validar('nuevoAuto')" value="Enviar">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>