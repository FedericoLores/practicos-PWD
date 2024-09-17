<?php
$titulo = "Trabajo práctico 4";
$ejercicio = "ejercicio";
$descripcion = "";
include_once ('../estructura/header.php');
include_once('../../configuracion.php');
?>
<div class="card m-3">
<div class="card-header text-center mt-3">
<h4>Nuevo Auto</h4>
</div>
<div class="card-body">
<form method="post" action="../accion/tp4/accionNuevoAuto.php" id="nuevoAuto" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" name ="Patente" type="text" class="form-control" pattern="^[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s-]+$" minlength="4" maxlength="10" required/>
        <div class="invalid-feedback">Ingrese una patente de valida de 4-8 caracteres</div>
        <label for="Marca" class="form-label mt-2">Marca</label>
        <input id="Marca" name ="Marca" type="text" class="form-control" minlength="3" maxlength="50" pattern="^(?=.*[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ])[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s-]+$" required/>
        <div class="invalid-feedback">Ingrese una marca valida</div>
        <label for="Modelo" class="form-label mt-2">Modelo</label>
        <input id="Modelo" name ="Modelo" type="number" min="0" class="form-control" min="0" max="99999999" required/>
        <div class="invalid-feedback">Ingrese un modelo valido</div>
        <label for="NroDni" class="form-label mt-2">Dni del propietario</label>
        <input id="NroDni" name ="NroDni" type="number" class="form-control" min="10000000" max="99999999" required/>
        <div class="invalid-feedback">El DNI debe tener 8 digitos</div>
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