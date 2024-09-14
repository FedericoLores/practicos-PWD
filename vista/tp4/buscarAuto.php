<?php
include_once ('../estructura/tp4/header.php');
include_once('../../configuracion.php');
?>

<div class="card m-3">
<div class="card-header text-center mt-3">
    <h4>Buscar Auto</h4>
</div>
<div class="card-body">
<form id="buscarAuto" method="post" action="../accion/tp4/accionBuscarAuto.php" class="needs-validation" novalidate>
	<div class="container">
        <label for="Patente" class="form-label">Patente</label>
        <input id="Patente" class="form-control" name ="Patente" type="text" pattern="^[A-Za-zñÑäëïöüáéíóúÁÉÍÓÚ\d\s-]+$" minlength="4" maxlength="10" required/>
        <div class="invalid-feedback">Ingrese una patente de valida de 4-8 caracteres</div>
        <input id="accion" name ="accion" value="buscar" type="hidden">
        <div class="row mt-2">
            <div class="col mx-2">
                <a href="../tp4/verAutos.php"><input type="button" class="btn btn-secondary mx-2" value="Volver"/></a>
                <input type="submit" onclick="validar('buscarAuto')" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php include_once '../estructura/footer.php';?>